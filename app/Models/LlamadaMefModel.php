<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LlamadaMefModel extends Model
{
    protected $table = 't22_principal_llamadas_mef';

    protected $primaryKey = 'id_llamada';

    public $timestamps = false;

    protected $fillable = [
        'folio',
        'idintegrante',
        'fecha_hora',
        'resultado',
        'duracion_minutos',
        'notas_observaciones',
        'acciones_pendientes',
        'documento_profesional',
        'fecharegistro',
        'estado_eliminado',
    ];

    protected $casts = [
        'fecha_hora' => 'datetime',
        'fecharegistro' => 'datetime',
    ];

    /**
     * Relación con el hogar
     */
    public function hogar()
    {
        return $this->belongsTo(PrincipalHogar::class, 'folio', 'folio');
    }

    /**
     * Obtener llamadas por folio ordenadas por fecha
     */
    public static function obtenerPorFolio($folio, $limite = 10)
    {
        return self::where('folio', $folio)
            ->where('estado_eliminado', 0)
            ->orderBy('fecha_hora', 'desc')
            ->limit($limite)
            ->get();
    }

    // Mapeo de campos para mantener compatibilidad con el código existente
    public function getTelefonoAttribute()
    {
        return $this->idintegrante;
    }

    public function getNombreAttribute()
    {
        return ''; // No hay campo nombre en la tabla real
    }

    public function getEstadoAttribute()
    {
        return $this->resultado;
    }

    public function getFechaAttribute()
    {
        return $this->fecha_hora;
    }

    public function getComentariosAttribute()
    {
        return $this->notas_observaciones;
    }

    // Setters para mantener compatibilidad
    public function setTelefonoAttribute($value)
    {
        $this->attributes['idintegrante'] = $value;
    }

    public function setNombreAttribute($value)
    {
        // No hay campo nombre en la tabla real
    }

    public function setEstadoAttribute($value)
    {
        $this->attributes['resultado'] = $value;
    }

    public function setFechaAttribute($value)
    {
        $this->attributes['fecha_hora'] = $value;
    }

    public function setComentariosAttribute($value)
    {
        $this->attributes['notas_observaciones'] = $value;
    }
}
