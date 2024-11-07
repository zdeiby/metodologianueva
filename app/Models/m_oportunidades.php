<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Importa la clase DB desde el espacio de nombres correcto

class m_oportunidades extends Model
{
    use HasFactory;

    public function __construct()
    {
        parent::__construct();
    }
    public function m_listadooportunidades()
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select('   
SELECT 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad, 
            oh.estado_oportunidad,
            oh.id, o.id_oportunidad
        FROM 
            dbmetodologia.t3_oportunidad AS o
		JOIN dbmetodologia.t1_indicadores_integrantes as indin
        ON (
        (o.indicador_bse_1 = 1 AND indin.indicadorintegrantebse_1 = 0)  
        OR (o.indicador_bse_1 = 2)  

        OR (o.indicador_bse_2 = 1 AND indin.indicadorintegrantebse_2 = 0)
        OR (o.indicador_bse_2 = 2)

        OR (o.indicador_bse_3 = 1 AND indin.indicadorintegrantebse_3 = 0)
        OR (o.indicador_bse_3 = 2)

        OR (o.indicador_bse_4 = 1 AND indin.indicadorintegrantebse_4 = 0)
        OR (o.indicador_bse_4 = 2)

        OR (o.indicador_bse_5 = 1 AND indin.indicadorintegrantebse_5 = 0)
        OR (o.indicador_bse_5 = 2)

        OR (o.indicador_bse_6 = 1 AND indin.indicadorintegrantebse_6 = 0)
        OR (o.indicador_bse_6 = 2)

        OR (o.indicador_bl_1 = 1 AND indin.indicadorintegrantebl_1 = 0)
        OR (o.indicador_bl_1 = 2)

        OR (o.indicador_bl_2 = 1 AND indin.indicadorintegrantebl_2 = 0)
        OR (o.indicador_bl_2 = 2)

        OR (o.indicador_bl_3 = 1 AND indin.indicadorintegrantebl_3 = 0)
        OR (o.indicador_bl_3 = 2)

        OR (o.indicador_bl_4 = 1 AND indin.indicadorintegrantebl_4 = 0)
        OR (o.indicador_bl_4 = 2)

        OR (o.indicador_bl_5 = 1 AND indin.indicadorintegrantebl_5 = 0)
        OR (o.indicador_bl_5 = 2)

        OR (o.indicador_bl_6 = 1 AND indin.indicadorintegrantebl_6 = 0)
        OR (o.indicador_bl_6 = 2)

        OR (o.indicador_bl_7 = 1 AND indin.indicadorintegrantebl_7 = 0)
        OR (o.indicador_bl_7 = 2)

        OR (o.indicador_bl_8 = 1 AND indin.indicadorintegrantebl_8 = 0)
        OR (o.indicador_bl_8 = 2)

        OR (o.indicador_bl_10 = 1 AND indin.indicadorintegrantebl_10 = 0)
        OR (o.indicador_bl_10 = 2)

        OR (o.indicador_bi_1 = 1 AND indin.indicadorintegrantebi_1 = 0)
        OR (o.indicador_bi_1 = 2)

        OR (o.indicador_bi_2 = 1 AND indin.indicadorintegrantebi_2 = 0)
        OR (o.indicador_bi_2 = 2)

        OR (o.indicador_bi_3 = 1 AND indin.indicadorintegrantebi_3 = 0)
        OR (o.indicador_bi_3 = 2)

        OR (o.indicador_bi_4 = 1 AND indin.indicadorintegrantebi_4 = 0)
        OR (o.indicador_bi_4 = 2)

        OR (o.indicador_bi_5 = 1 AND indin.indicadorintegrantebi_5 = 0)
        OR (o.indicador_bi_5 = 2)

        OR (o.indicador_bi_6 = 1 AND indin.indicadorintegrantebi_6 = 0)
        OR (o.indicador_bi_6 = 2)

        OR (o.indicador_bf_1 = 1 AND indin.indicadorintegrantebf_1 = 0)
        OR (o.indicador_bf_1 = 2)

        OR (o.indicador_bf_2 = 1 AND indin.indicadorintegrantebf_2 = 0)
        OR (o.indicador_bf_2 = 2)

        OR (o.indicador_bf_3 = 1 AND indin.indicadorintegrantebf_3 = 0)
        OR (o.indicador_bf_3 = 2)

        OR (o.indicador_bf_5 = 1 AND indin.indicadorintegrantebf_5 = 0)
        OR (o.indicador_bf_5 = 2)
    )
        JOIN 
        
            dbmetodologia.t1_integranteshogar AS ih
          ON (
    (
        -- Condiciones para sexo y edad
        (o.sexo = ih.sexo AND ih.edad BETWEEN o.edad_inicial AND o.edad_final) OR 
        (o.sexo = 372 AND ih.edad BETWEEN o.edad_inicial AND o.edad_final)
    )
    AND
    (
        -- Condiciones para los tipos de documento
        (o.tipo_documento_registro_civil = 1 AND ih.tipodocumento = 3) OR 
        (o.tipo_documento_registro_civil = 2) OR

        (o.tipo_documento_tarjeta_identidad = 1 AND ih.tipodocumento = 4) OR 
        (o.tipo_documento_tarjeta_identidad = 2) OR

        (o.tipo_documento_cedula_ciudadania = 1 AND ih.tipodocumento = 5) OR 
        (o.tipo_documento_cedula_ciudadania = 2) OR

        (o.tipo_documento_cedula_extranjeria = 1 AND ih.tipodocumento = 6) OR 
        (o.tipo_documento_cedula_extranjeria = 2) OR

        (o.tipo_documento_estatuto_proteccion_ppt = 1 AND ih.tipodocumento = 7) OR 
        (o.tipo_documento_estatuto_proteccion_ppt = 2) OR

        (o.tipo_documento_salvo_conducto = 1 AND ih.tipodocumento = 8) OR 
        (o.tipo_documento_salvo_conducto = 2) OR

        (o.tipo_documento_pasaporte = 1 AND ih.tipodocumento = 9) OR 
        (o.tipo_documento_pasaporte = 2) OR

        (o.tipo_documento_otro_documento_extranjero = 1 AND ih.tipodocumento = 10) OR 
        (o.tipo_documento_otro_documento_extranjero = 2) OR

        (o.tipo_documento_no_tiene_documento = 1 AND ih.tipodocumento = 11) OR 
        (o.tipo_documento_no_tiene_documento = 2)
    )
)

JOIN 
    dbmetodologia.t1_hogardatosgeograficos AS hg
    ON (
    (o.comuna_1_Popular = 1 AND hg.comuna = 1) OR 
    (o.comuna_2_Santa_Cruz = 1 AND hg.comuna = 2) OR 
    (o.comuna_3_Manrique = 1 AND hg.comuna = 3) OR 
    (o.comuna_4_Aranjuez = 1 AND hg.comuna = 4) OR 
    (o.comuna_5_Castilla = 1 AND hg.comuna = 5) OR 
    (o.comuna_6_Doce_de_Octubre = 1 AND hg.comuna = 6) OR 
    (o.comuna_7_Robledo = 1 AND hg.comuna = 7) OR 
    (o.comuna_8_Villa_Hermosa = 1 AND hg.comuna = 8) OR 
    (o.comuna_9_Buenos_Aires = 1 AND hg.comuna = 9) OR 
    (o.comuna_10_La_Candelaria = 1 AND hg.comuna = 10) OR 
    (o.comuna_11_Laureles_Estadio = 1 AND hg.comuna = 11) OR 
    (o.comuna_12_La_America = 1 AND hg.comuna = 12) OR 
    (o.comuna_13_San_Javier = 1 AND hg.comuna = 13) OR 
    (o.comuna_14_El_Poblado = 1 AND hg.comuna = 14) OR 
    (o.comuna_15_Guayabal = 1 AND hg.comuna = 15) OR 
    (o.comuna_16_Belen = 1 AND hg.comuna = 16) OR 
    (o.comuna_17_Ciudadela = 1 AND hg.comuna = 17) OR 
    (o.comuna_50_Palmitas = 1 AND hg.comuna = 50) OR 
    (o.comuna_60_San_Cristobal = 1 AND hg.comuna = 60) OR 
    (o.comuna_70_Altavista = 1 AND hg.comuna = 70) OR 
    (o.comuna_80_San_Antonio_de_Prado = 1 AND hg.comuna = 80) OR 
    (o.comuna_90_Santa_Elena = 1 AND hg.comuna = 90)
)
        LEFT JOIN 
            dbmetodologia.t1_oportunidad_integrantes AS oh
            ON ih.idintegrante = oh.idintegrante 
            AND ih.folio = oh.folio
        WHERE 
            ih.estado = 1 and hg.folio = ih.folio
        GROUP BY 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad,
            oh.id, 
            o.id_oportunidad,
            oh.estado_oportunidad;
    ');


        return $resultado;
    }

}
