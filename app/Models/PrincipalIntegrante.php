<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrincipalIntegrante extends Model
{
    protected $table = 't1_integranteshogar';
    
    protected $primaryKey = 'idintegrante';
    
    public $timestamps = true;
    
    protected $fillable = [
        'idintegrante',
        'folio',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'nombreidentatario1',
        'nombreidentatario2',
        'fechanacimiento',
        'edad',
        'nacionalidad',
        'tipodocumento',
        'documento',
        'representante',
        'parentesco',
        'jefedelhogar',
        'sexo',
        'privadodelalibertad',
        'estadocivil',
        'telefono',
        'celular',
        'avatar',
        'estadointegrante',
        'integranteactivomotivo',
        'integranteactivoobs',
        'usuario',
        'estado',
        'sincro'
    ];

    /**
     * Obtener el nombre completo del integrante
     */
    public function getNombreCompletoAttribute()
    {
        return trim(
            ($this->nombre1 ?? '') . ' ' . 
            ($this->nombre2 ?? '') . ' ' . 
            ($this->apellido1 ?? '') . ' ' . 
            ($this->apellido2 ?? '')
        );
    }

    /**
     * Relación con hogares donde es titular
     */
    public function hogaresComoCabeza()
    {
        return $this->hasMany(PrincipalHogar::class, 'idintegrantetitular', 'idintegrante');
    }
}
