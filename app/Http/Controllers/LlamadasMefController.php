<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LlamadaMefModel;
use App\Models\PrincipalHogar;
use App\Models\PrincipalIntegrante;
use Illuminate\Support\Facades\DB;
use Hashids\Hashids;


class LlamadasMefController extends Controller
{
    public function index()
    {
        $llamadas = LlamadaMefModel::where('estado_eliminado', 0)->orderBy('fecha_hora','desc')->paginate(20);
        return view('llamadas_mef.index', compact('llamadas'));
    }

    public function create()
    {
        return view('llamadas_mef.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'telefono' => 'required|string',
            'estado' => 'nullable|string',
            'fecha' => 'nullable|date',
            'comentarios' => 'nullable|string',
        ]);

        // Mapear los datos a los campos reales de la base de datos
        $dbData = [
            'idintegrante' => $data['telefono'],
            'resultado' => $data['estado'] ?? '',
            'fecha_hora' => $data['fecha'] ?? now(),
            'notas_observaciones' => $data['comentarios'] ?? '',
            'folio' => 0, // Valor por defecto
            'duracion_minutos' => 0, // Valor por defecto
            'estado_eliminado' => 0, // Activo
        ];

        LlamadaMefModel::create($dbData);
        return redirect()->route('llamadas-mef.index')->with('success','Llamada creada.');
    }

    public function show(LlamadaMefModel $llamada)
    {
        return view('llamadas_mef.show', compact('llamada'));
    }

    public function edit(LlamadaMefModel $llamada)
    {
        return view('llamadas_mef.form', compact('llamada'));
    }

    public function update(Request $request, LlamadaMefModel $llamada)
    {
        $data = $request->validate([
            'telefono' => 'required|string',
            'estado' => 'nullable|string',
            'fecha' => 'nullable|date',
            'comentarios' => 'nullable|string',
        ]);

        // Mapear los datos a los campos reales de la base de datos
        $dbData = [
            'idintegrante' => $data['telefono'],
            'resultado' => $data['estado'] ?? '',
            'fecha_hora' => $data['fecha'] ?? now(),
            'notas_observaciones' => $data['comentarios'] ?? '',
        ];

        $llamada->update($dbData);
        return redirect()->route('llamadas-mef.index')->with('success','Llamada actualizada.');
    }

    public function destroy(LlamadaMefModel $llamada)
    {
        // En lugar de eliminar físicamente, marcamos como eliminado
        $llamada->update(['estado_eliminado' => 1]);
        return redirect()->route('llamadas-mef.index')->with('success','Llamada eliminada.');
    }

    /**
     * Mostrar la vista de gestión de un hogar específico
     */
    public function gestion($folio)
    {

        $hashids = new Hashids('', 10);
        $decoded = $hashids->decode($folio);

          if (!empty($decoded)) {
                $folio = $decoded[0];
            } else {
                // Manejar error si no se puede decodificar
                return redirect()->back()->with('error', 'Folio inválido o no encontrado.');
            }
        // Obtener documento del profesional de la sesión
        $doccogestor = session('documento');
        
        // Si no hay sesión, intentar obtener el usuario del hogar
        if (!$doccogestor) {
            $hogarTemp = PrincipalHogar::where('folio', $folio)->first();
            if ($hogarTemp) {
                $doccogestor = $hogarTemp->usuario;
            }
        }
        
        if (!$doccogestor) {
            return view('llamadas_mef.gestion_hogar_error', [
                'error' => 'No se encontró la sesión del profesional. Por favor, inicia sesión en el sistema principal.',
                'folio' => $folio
            ]);
        }

        // Obtener datos del hogar con el titular
        $hogar = PrincipalHogar::obtenerConTitular($folio);

        // Verificar que el hogar existe
        if (!$hogar) {
            return view('llamadas_mef.gestion_hogar_error', [
                'error' => 'No se encontró el hogar con el folio: ' . $folio,
                'folio' => $folio
            ]);
        }

        // Calcular porcentaje de logros (simplificado - retorna 0 por ahora)
        // TODO: Implementar lógica de cálculo de logros cuando esté disponible el modelo m_dimensiones
        $porcentaje_total = $this->calcularPorcentajeLogros($folio);

        return view('llamadas_mef.gestion_hogar', [
            'hogar' => $hogar,
            'porcentaje_total' => $porcentaje_total,
            'documento_profesional' => $doccogestor
        ]);
    }

    /**
     * Obtener historial de llamadas de un hogar (AJAX)
     */
    public function historial($folio)
    {


        //dd($folio);
        //  $hashids = new Hashids('', 10);
        // $decoded = $hashids->decode($folio);

        //   if (!empty($decoded)) {
        //         $folio = $decoded[0];
        //     } else {
        //         // Manejar error si no se puede decodificar
        //         return redirect()->back()->with('error', 'Folio inválido o no encontrado.');
        //     }

        try {
            $historial = LlamadaMefModel::obtenerPorFolio($folio);
            
            return response()->json([
                'success' => true,
                'message' => 'Historial obtenido correctamente',
                'historial' => $historial
            ]);
        } catch (\Exception $e) {
            \Log::error('Error al obtener historial: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener el historial',
                'historial' => []
            ], 500);
        }
    }

    /**
     * Guardar una nueva llamada (AJAX)
     */
    public function storeLlamada(Request $request, $folio)
    {

        //  $hashids = new Hashids('', 10);
        // $decoded = $hashids->decode($folio);

        //   if (!empty($decoded)) {
        //         $folio = $decoded[0];
        //     } else {
        //         // Manejar error si no se puede decodificar
        //         return redirect()->back()->with('error', 'Folio inválido o no encontrado.');
        //     }

        try {
            $validated = $request->validate([
                'idintegrante' => 'required',
                'fecha_hora' => 'required|date',
                'resultado' => 'required|string',
                'duracion' => 'nullable|numeric',
                'notas' => 'nullable|string',
                'documento_profesional' => 'required'
            ]);

            $llamada = LlamadaMefModel::create([
                'folio' => $folio,
                'idintegrante' => $validated['idintegrante'],
                'fecha_hora' => $validated['fecha_hora'],
                'resultado' => $validated['resultado'],
                'duracion_minutos' => $validated['duracion'] ?? 0,
                'notas_observaciones' => $validated['notas'] ?? '',
                'documento_profesional' => $validated['documento_profesional'],
                'fecharegistro' => now(),
                'estado_eliminado' => 0
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Llamada guardada correctamente',
                'id_llamada' => $llamada->id_llamada
            ]);
        } catch (\Exception $e) {
            \Log::error('Error al guardar llamada: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Error al guardar la llamada: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Calcular porcentaje de logros del hogar
     * TODO: Implementar cuando esté disponible el modelo de dimensiones/logros
     */
    private function calcularPorcentajeLogros($folio)
    {
        // Por ahora retorna 0
        // En el futuro, aquí se implementará la lógica equivalente a fm_totalporcentajelogros
        return 0;
    }
}
