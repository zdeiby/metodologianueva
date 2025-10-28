<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrincipalHogar extends Model
{
    protected $table = 't1_principalhogar';
    
    protected $primaryKey = 'folio';
    
    public $incrementing = false;
    
    protected $keyType = 'string';
    
    public $timestamps = true;
    
    protected $fillable = [
        'folio',
        'idintegrantetitular',
        'usuario',
        'habeasdata',
        'folioactivomotivo',
        'folioactivoobser',
        'sincro',
        'sisben',
        'metodologia',
        'observacion',
        'folioactivo'
    ];

    /**
     * Relación con el integrante titular (representante = 1)
     */
    public function integranteTitular()
    {
        return $this->belongsTo(PrincipalIntegrante::class, 'idintegrantetitular', 'idintegrante')
            ->where('representante', '1');
    }

    /**
     * Relación con las llamadas del hogar
     */
    public function llamadas()
    {
        return $this->hasMany(LlamadaMefModel::class, 'folio', 'folio');
    }

    /**
     * Verificar si el hogar pertenece a un usuario específico
     */
    public static function perteneceACogestor($folio, $usuario)
    {
        return self::where('folio', $folio)
            ->where('usuario', $usuario)
            ->exists();
    }

    /**
     * Obtener hogar con información del titular
     */
    public static function obtenerConTitular($folio)
    {
        return self::with('integranteTitular')
            ->where('folio', $folio)
            ->first();
    }
}
