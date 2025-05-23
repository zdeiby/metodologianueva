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
    public function m_listadooportunidades($folio)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select("  
SELECT 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad, 
            oh.estado_oportunidad,
            o.id_oportunidad,
            o.aplica_hogar_integrante
        FROM 
            dbmetodologia.t1_oportunidad AS o
	/*	JOIN dbmetodologia.t1_indicadores_integrantes as indin
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
    ) */
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
           AND o.id_oportunidad = oh.idoportunidad
           -- AND ih.folio = oh.folio
        WHERE 
            ih.estado = 1 and hg.folio = ih.folio and o.aplica_hogar_integrante = 373
             AND CURRENT_DATE BETWEEN o.fecha_inicio AND o.fecha_limite_acercamiento  " . ($folio != '' ? "AND ih.folio = $folio" : "") . " 
        GROUP BY 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad,
            o.id_oportunidad,
            o.aplica_hogar_integrante,
            oh.estado_oportunidad;
    ");


        return $resultado;
    }


    public function m_listadooportunidadeshogar($folio)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select("   
SELECT 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad, 
            oh.estado_oportunidad,
            o.id_oportunidad,
            o.aplica_hogar_integrante
        FROM 
            dbmetodologia.t1_oportunidad AS o
/*	JOIN dbmetodologia.t1_indicadores_hogar as indin
      ON (
    (o.indicador_bse_1 = 1 AND indin.indicadorbse_1 = 0)  
    OR (o.indicador_bse_1 = 2)  

    OR (o.indicador_bse_2 = 1 AND indin.indicadorbse_2 = 0)
    OR (o.indicador_bse_2 = 2)

    OR (o.indicador_bse_3 = 1 AND indin.indicadorbse_3 = 0)
    OR (o.indicador_bse_3 = 2)

    OR (o.indicador_bse_4 = 1 AND indin.indicadorbse_4 = 0)
    OR (o.indicador_bse_4 = 2)

    OR (o.indicador_bse_5 = 1 AND indin.indicadorbse_5 = 0)
    OR (o.indicador_bse_5 = 2)

    OR (o.indicador_bse_6 = 1 AND indin.indicadorbse_6 = 0)
    OR (o.indicador_bse_6 = 2)

    OR (o.indicador_bse_7 = 1 AND indin.indicadorbse_7 = 0)
    OR (o.indicador_bse_7 = 2)

    OR (o.indicador_bl_1 = 1 AND indin.indicadorbl_1 = 0)
    OR (o.indicador_bl_1 = 2)

    OR (o.indicador_bl_2 = 1 AND indin.indicadorbl_2 = 0)
    OR (o.indicador_bl_2 = 2)

    OR (o.indicador_bl_3 = 1 AND indin.indicadorbl_3 = 0)
    OR (o.indicador_bl_3 = 2)

    OR (o.indicador_bl_4 = 1 AND indin.indicadorbl_4 = 0)
    OR (o.indicador_bl_4 = 2)

    OR (o.indicador_bl_5 = 1 AND indin.indicadorbl_5 = 0)
    OR (o.indicador_bl_5 = 2)

    OR (o.indicador_bl_6 = 1 AND indin.indicadorbl_6 = 0)
    OR (o.indicador_bl_6 = 2)

    OR (o.indicador_bl_7 = 1 AND indin.indicadorbl_7 = 0)
    OR (o.indicador_bl_7 = 2)

    OR (o.indicador_bl_8 = 1 AND indin.indicadorbl_8 = 0)
    OR (o.indicador_bl_8 = 2)

    OR (o.indicador_bl_9 = 1 AND indin.indicadorbl_9 = 0)
    OR (o.indicador_bl_9 = 2)

    OR (o.indicador_bl_10 = 1 AND indin.indicadorbl_10 = 0)
    OR (o.indicador_bl_10 = 2)

    OR (o.indicador_bef_1 = 1 AND indin.indicadorbef_1 = 0)
    OR (o.indicador_bef_1 = 2)

    OR (o.indicador_bef_2 = 1 AND indin.indicadorbef_2 = 0)
    OR (o.indicador_bef_2 = 2)

    OR (o.indicador_bef_3 = 1 AND indin.indicadorbef_3 = 0)
    OR (o.indicador_bef_3 = 2)

    OR (o.indicador_bef_4 = 1 AND indin.indicadorbef_4 = 0)
    OR (o.indicador_bef_4 = 2)

    OR (o.indicador_bef_5 = 1 AND indin.indicadorbef_5 = 0)
    OR (o.indicador_bef_5 = 2)

    OR (o.indicador_bi_1 = 1 AND indin.indicadorbi_1 = 0)
    OR (o.indicador_bi_1 = 2)

    OR (o.indicador_bi_2 = 1 AND indin.indicadorbi_2 = 0)
    OR (o.indicador_bi_2 = 2)

    OR (o.indicador_bi_3 = 1 AND indin.indicadorbi_3 = 0)
    OR (o.indicador_bi_3 = 2)

    OR (o.indicador_bi_4 = 1 AND indin.indicadorbi_4 = 0)
    OR (o.indicador_bi_4 = 2)

    OR (o.indicador_bi_5 = 1 AND indin.indicadorbi_5 = 0)
    OR (o.indicador_bi_5 = 2)

    OR (o.indicador_bi_6 = 1 AND indin.indicadorbi_6 = 0)
    OR (o.indicador_bi_6 = 2)

    OR (o.indicador_bf_1 = 1 AND indin.indicadorbf_1 = 0)
    OR (o.indicador_bf_1 = 2)

    OR (o.indicador_bf_2 = 1 AND indin.indicadorbf_2 = 0)
    OR (o.indicador_bf_2 = 2)

    OR (o.indicador_bf_3 = 1 AND indin.indicadorbf_3 = 0)
    OR (o.indicador_bf_3 = 2)

    OR (o.indicador_bf_4 = 1 AND indin.indicadorbf_4 = 0)
    OR (o.indicador_bf_4 = 2)

    OR (o.indicador_bf_5 = 1 AND indin.indicadorbf_5 = 0)
    OR (o.indicador_bf_5 = 2)
)  */

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
        JOIN 
        
            dbmetodologia.t1_principalhogar AS ph
          ON 
       hg.folio = ph.folio

			 LEFT JOIN 
        
            dbmetodologia.t1_integranteshogar AS ih
          ON 
       ph.idintegrantetitular = ih.idintegrante 



        LEFT JOIN 
            dbmetodologia.t1_oportunidad_hogares AS oh
            ON ih.idintegrante = oh.idintegrante 
             AND o.id_oportunidad = oh.idoportunidad
            -- AND ih.folio = oh.folio
        WHERE 
            ih.estado = 1 and hg.folio = ih.folio and o.aplica_hogar_integrante = '374'  " . ($folio != '' ? "AND ih.folio = $folio" : "") . "
             AND CURRENT_DATE BETWEEN o.fecha_inicio AND o.fecha_limite_acercamiento 
        GROUP BY 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad,
            o.id_oportunidad,
           o.aplica_hogar_integrante,
           oh.estado_oportunidad;
    ");


        return $resultado;
    }






    public function m_listadooportunidadesmovimientoindicadores($folio,$idintegrante,$id_bienestar, $id_indicador)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select("  
            SELECT 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad, 
            oh.estado_oportunidad,
            o.id_oportunidad,
            o.aplica_hogar_integrante
        FROM 
            dbmetodologia.t1_oportunidad AS o
		JOIN dbmetodologia.t1_indicadores_integrantes as indin
        ON (
        " . ($id_bienestar == 1 && $id_indicador == 1  ? "(o.indicador_bse_1 = 1 AND indin.indicadorintegrantebse_1 = 0)  
        --      OR (o.indicador_bse_1 = 2)" : "") . "
        " . ($id_bienestar == 1 && $id_indicador == 2  ? " -- OR
         (o.indicador_bse_2 = 1 AND indin.indicadorintegrantebse_2 = 0)
       -- OR (o.indicador_bse_2 = 2)" : "") . "
     ".($id_bienestar == 1 && $id_indicador == 3  ? " (o.indicador_bse_3 = 1 AND indin.indicadorintegrantebse_3 = 0) ":"") ."
     ".($id_bienestar == 1 && $id_indicador == 4  ? " (o.indicador_bse_4 = 1 AND indin.indicadorintegrantebse_4 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 5  ? "(o.indicador_bse_5 = 1 AND indin.indicadorintegrantebse_5 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 6  ? "(o.indicador_bse_6 = 1 AND indin.indicadorintegrantebse_6 = 0)":"") ."   
     
     ".($id_bienestar == 2 && $id_indicador == 1  ? "(o.indicador_bl_1 = 1 AND indin.indicadorintegrantebl_1 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 2  ? "(o.indicador_bl_2 = 1 AND indin.indicadorintegrantebl_2 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 3  ? "(o.indicador_bl_3 = 1 AND indin.indicadorintegrantebl_3 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 4  ? "(o.indicador_bl_4 = 1 AND indin.indicadorintegrantebl_4 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 5  ? "(o.indicador_bl_5 = 1 AND indin.indicadorintegrantebl_5 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 6  ? "(o.indicador_bl_6 = 1 AND indin.indicadorintegrantebl_6 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 7  ? "(o.indicador_bl_7 = 1 AND indin.indicadorintegrantebl_7 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 8  ? "(o.indicador_bl_8 = 1 AND indin.indicadorintegrantebl_8 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 10  ? "(o.indicador_bl_10 = 1 AND indin.indicadorintegrantebl_10 = 0)":"") ."     
     

     -- bienestar intelectual
    ".($id_bienestar == 4 && $id_indicador == 1  ? "(o.indicador_bi_1 = 1 AND indin.indicadorintegrantebi_1 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 2  ? "(o.indicador_bi_2 = 1 AND indin.indicadorintegrantebi_2 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 3  ? "(o.indicador_bi_3 = 1 AND indin.indicadorintegrantebi_3 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 4  ? "(o.indicador_bi_4 = 1 AND indin.indicadorintegrantebi_4 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 5  ? "(o.indicador_bi_5 = 1 AND indin.indicadorintegrantebi_5 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 6  ? "(o.indicador_bi_6 = 1 AND indin.indicadorintegrantebi_6 = 0)":"") ."     

     ".($id_bienestar == 5 && $id_indicador == 1  ? "(o.indicador_bf_1 = 1 AND indin.indicadorintegrantebf_1 = 0)":"") ."     
     ".($id_bienestar == 5 && $id_indicador == 2  ? "(o.indicador_bf_2 = 1 AND indin.indicadorintegrantebf_2 = 0)":"") ."     
     ".($id_bienestar == 5 && $id_indicador == 3  ? "(o.indicador_bf_3 = 1 AND indin.indicadorintegrantebf_3 = 0)":"") ."  
    ".($id_bienestar == 5 && $id_indicador == 4  ? "(o.indicador_bf_4 = 1 AND indin.indicadorbf_4 = 0)":"") ."   
     ".($id_bienestar == 5 && $id_indicador == 5  ? "(o.indicador_bf_5 = 1 AND indin.indicadorintegrantebf_5 = 0)":"") ."     


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
           AND o.id_oportunidad = oh.idoportunidad
           -- AND ih.folio = oh.folio
        WHERE 
            ih.estado = 1 and hg.folio = ih.folio and o.aplica_hogar_integrante = 373
             AND CURRENT_DATE BETWEEN o.fecha_inicio AND o.fecha_limite_acercamiento  AND ih.folio ='$folio'
             AND ih.idintegrante ='$idintegrante'
        GROUP BY 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad,
            o.id_oportunidad,
            o.aplica_hogar_integrante,
            oh.estado_oportunidad;
    ");


        return $resultado;
    }




     public function m_listadooportunidadesmovimientoindicadoresffes($folio,$idintegrante,$id_bienestar, $id_indicador)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select("  
            SELECT 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad, 
            oh.estado_oportunidad,
            o.id_oportunidad,
            o.aplica_hogar_integrante
        FROM 
            dbmetodologia.t1_oportunidad AS o
		JOIN dbmetodologia.t1_indicadores_integrantes_ffes as indin
        ON (
        " . ($id_bienestar == 1 && $id_indicador == 1  ? "(o.indicador_bse_1 = 1 AND indin.indicadorintegrantebse_1 = 0)  
        --      OR (o.indicador_bse_1 = 2)" : "") . "
        " . ($id_bienestar == 1 && $id_indicador == 2  ? " -- OR
         (o.indicador_bse_2 = 1 AND indin.indicadorintegrantebse_2 = 0)
       -- OR (o.indicador_bse_2 = 2)" : "") . "
     ".($id_bienestar == 1 && $id_indicador == 3  ? " (o.indicador_bse_3 = 1 AND indin.indicadorintegrantebse_3 = 0) ":"") ."
     ".($id_bienestar == 1 && $id_indicador == 4  ? " (o.indicador_bse_4 = 1 AND indin.indicadorintegrantebse_4 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 5  ? "(o.indicador_bse_5 = 1 AND indin.indicadorintegrantebse_5 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 6  ? "(o.indicador_bse_6 = 1 AND indin.indicadorintegrantebse_6 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 8  ? "(o.indicador_bse_8 = 1 AND indin.indicadorintegrantebse_8_ffes = 0)":"") ."   
     
     ".($id_bienestar == 2 && $id_indicador == 1  ? "(o.indicador_bl_1 = 1 AND indin.indicadorintegrantebl_1 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 2  ? "(o.indicador_bl_2 = 1 AND indin.indicadorintegrantebl_2 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 3  ? "(o.indicador_bl_3 = 1 AND indin.indicadorintegrantebl_3 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 4  ? "(o.indicador_bl_4 = 1 AND indin.indicadorintegrantebl_4 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 5  ? "(o.indicador_bl_5 = 1 AND indin.indicadorintegrantebl_5 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 6  ? "(o.indicador_bl_6 = 1 AND indin.indicadorintegrantebl_6 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 7  ? "(o.indicador_bl_7 = 1 AND indin.indicadorintegrantebl_7 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 8  ? "(o.indicador_bl_8 = 1 AND indin.indicadorintegrantebl_8 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 10  ? "(o.indicador_bl_10 = 1 AND indin.indicadorintegrantebl_10 = 0)":"") ."     
     ".($id_bienestar == 2 && $id_indicador == 12  ? "(o.indicador_bl_12_ffes = 1 AND indin.indicadorintegrantebl_12_ffes = 0)":"") ."     


     -- bienestar intelectual
    ".($id_bienestar == 4 && $id_indicador == 1  ? "(o.indicador_bi_1 = 1 AND indin.indicadorintegrantebi_1 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 2  ? "(o.indicador_bi_2 = 1 AND indin.indicadorintegrantebi_2 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 3  ? "(o.indicador_bi_3 = 1 AND indin.indicadorintegrantebi_3 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 4  ? "(o.indicador_bi_4 = 1 AND indin.indicadorintegrantebi_4 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 5  ? "(o.indicador_bi_5 = 1 AND indin.indicadorintegrantebi_5 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 6  ? "(o.indicador_bi_6 = 1 AND indin.indicadorintegrantebi_6 = 0)":"") ."     

     ".($id_bienestar == 5 && $id_indicador == 1  ? "(o.indicador_bf_1 = 1 AND indin.indicadorintegrantebf_1 = 0)":"") ."     
     ".($id_bienestar == 5 && $id_indicador == 2  ? "(o.indicador_bf_2 = 1 AND indin.indicadorintegrantebf_2 = 0)":"") ."     
     ".($id_bienestar == 5 && $id_indicador == 3  ? "(o.indicador_bf_3 = 1 AND indin.indicadorintegrantebf_3 = 0)":"") ."  
    ".($id_bienestar == 5 && $id_indicador == 4  ? "(o.indicador_bf_4 = 1 AND indin.indicadorbf_4 = 0)":"") ."   
     ".($id_bienestar == 5 && $id_indicador == 5  ? "(o.indicador_bf_5 = 1 AND indin.indicadorintegrantebf_5 = 0)":"") ."     


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
           AND o.id_oportunidad = oh.idoportunidad
           -- AND ih.folio = oh.folio
        WHERE 
            ih.estado = 1 and hg.folio = ih.folio and o.aplica_hogar_integrante = 373
             AND CURRENT_DATE BETWEEN o.fecha_inicio AND o.fecha_limite_acercamiento  AND ih.folio ='$folio'
             AND ih.idintegrante ='$idintegrante'
        GROUP BY 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad,
            o.id_oportunidad,
            o.aplica_hogar_integrante,
            oh.estado_oportunidad;
    ");


        return $resultado;
    }


    public function m_listadooportunidadesmovimientoindicadoreshogar($folio,$idintegrante,$id_bienestar, $id_indicador)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select("  
        
SELECT 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad, 
            oh.estado_oportunidad,
            o.id_oportunidad,
            o.aplica_hogar_integrante
        FROM 
            dbmetodologia.t1_oportunidad AS o
JOIN dbmetodologia.t1_indicadores_hogar as indin
      ON (
     ".($id_bienestar == 1 && $id_indicador == 1  ? "(o.indicador_bse_1 = 1 AND indin.indicadorbse_1 = 0) " : "") . "
     ".($id_bienestar == 1 && $id_indicador == 2  ? "(o.indicador_bse_2 = 1 AND indin.indicadorbse_2 = 0)" : "") . "
     ".($id_bienestar == 1 && $id_indicador == 3  ? " (o.indicador_bse_3 = 1 AND indin.indicadorbse_3 = 0) ":"") ."
     ".($id_bienestar == 1 && $id_indicador == 4  ? " (o.indicador_bse_4 = 1 AND indin.indicadorbse_4 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 5  ? "(o.indicador_bse_5 = 1 AND indin.indicadorbse_5 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 6  ? "(o.indicador_bse_6 = 1 AND indin.indicadorbse_6 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 7  ? "(o.indicador_bse_7 = 1 AND indin.indicadorbse_7 = 0)":"") ."   
   
     
     ".($id_bienestar == 2 && $id_indicador == 1  ? "(o.indicador_bl_1 = 1 AND indin.indicadorbl_1 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 2  ? "(o.indicador_bl_2 = 1 AND indin.indicadorbl_2 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 3  ? "(o.indicador_bl_3 = 1 AND indin.indicadorbl_3 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 4  ? "(o.indicador_bl_4 = 1 AND indin.indicadorbl_4 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 5  ? "(o.indicador_bl_5 = 1 AND indin.indicadorbl_5 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 6  ? "(o.indicador_bl_6 = 1 AND indin.indicadorbl_6 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 7  ? "(o.indicador_bl_7 = 1 AND indin.indicadorbl_7 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 8  ? "(o.indicador_bl_8 = 1 AND indin.indicadorbl_8 = 0)":"") ." 
     ".($id_bienestar == 2 && $id_indicador == 9  ? "(o.indicador_bl_9 = 1 AND indin.indicadorbl_9 = 0)":"") ."             
     ".($id_bienestar == 2 && $id_indicador == 10  ? "(o.indicador_bl_10 = 1 AND indin.indicadorbl_10 = 0)":"") ."     
     
     ".($id_bienestar == 3 && $id_indicador == 1  ? "(o.indicador_bef_1 = 1 AND indin.indicadorbef_1 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 2  ? "(o.indicador_bef_2 = 1 AND indin.indicadorbef_2 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 3  ? "(o.indicador_bef_3 = 1 AND indin.indicadorbef_3 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 4  ? "(o.indicador_bef_4 = 1 AND indin.indicadorbef_4 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 5  ? "(o.indicador_bef_5 = 1 AND indin.indicadorbef_5 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 6  ? "(o.indicador_bef_6 = 1 AND indin.indicadorbef_6 = 0)":"") ." 
     -- bienestar intelectual
    ".($id_bienestar == 4 && $id_indicador == 1   ? "(o.indicador_bi_1 = 1 AND indin.indicadorbi_1 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 2  ? "(o.indicador_bi_2 = 1 AND indin.indicadorbi_2 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 3  ? "(o.indicador_bi_3 = 1 AND indin.indicadorbi_3 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 4  ? "(o.indicador_bi_4 = 1 AND indin.indicadorbi_4 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 5  ? "(o.indicador_bi_5 = 1 AND indin.indicadorbi_5 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 6  ? "(o.indicador_bi_6 = 1 AND indin.indicadorbi_6 = 0)":"") ."     

     ".($id_bienestar == 5 && $id_indicador == 1  ? "(o.indicador_bf_1 = 1 AND indin.indicadorbf_1 = 0)":"") ."     
     ".($id_bienestar == 5 && $id_indicador == 2  ? "(o.indicador_bf_2 = 1 AND indin.indicadorbf_2 = 0)":"") ."     
     ".($id_bienestar == 5 && $id_indicador == 3  ? "(o.indicador_bf_3 = 1 AND indin.indicadorbf_3 = 0)":"") ."
     ".($id_bienestar == 5 && $id_indicador == 4  ? "(o.indicador_bf_4 = 1 AND indin.indicadorbf_4 = 0)":"") ."      
     ".($id_bienestar == 5 && $id_indicador == 5  ? "(o.indicador_bf_5 = 1 AND indin.indicadorbf_5 = 0)":"") ."     


/*

    (o.indicador_bse_1 = 1 AND indin.indicadorbse_1 = 0)  
    OR (o.indicador_bse_1 = 2)  

    OR (o.indicador_bse_2 = 1 AND indin.indicadorbse_2 = 0)
    OR (o.indicador_bse_2 = 2)

    OR (o.indicador_bse_3 = 1 AND indin.indicadorbse_3 = 0)
    OR (o.indicador_bse_3 = 2)

    OR (o.indicador_bse_4 = 1 AND indin.indicadorbse_4 = 0)
    OR (o.indicador_bse_4 = 2)

    OR (o.indicador_bse_5 = 1 AND indin.indicadorbse_5 = 0)
    OR (o.indicador_bse_5 = 2)

    OR (o.indicador_bse_6 = 1 AND indin.indicadorbse_6 = 0)
    OR (o.indicador_bse_6 = 2)

    OR (o.indicador_bse_7 = 1 AND indin.indicadorbse_7 = 0)
    OR (o.indicador_bse_7 = 2)

    OR (o.indicador_bl_1 = 1 AND indin.indicadorbl_1 = 0)
    OR (o.indicador_bl_1 = 2)

    OR (o.indicador_bl_2 = 1 AND indin.indicadorbl_2 = 0)
    OR (o.indicador_bl_2 = 2)

    OR (o.indicador_bl_3 = 1 AND indin.indicadorbl_3 = 0)
    OR (o.indicador_bl_3 = 2)

    OR (o.indicador_bl_4 = 1 AND indin.indicadorbl_4 = 0)
    OR (o.indicador_bl_4 = 2)

    OR (o.indicador_bl_5 = 1 AND indin.indicadorbl_5 = 0)
    OR (o.indicador_bl_5 = 2)

    OR (o.indicador_bl_6 = 1 AND indin.indicadorbl_6 = 0)
    OR (o.indicador_bl_6 = 2)

    OR (o.indicador_bl_7 = 1 AND indin.indicadorbl_7 = 0)
    OR (o.indicador_bl_7 = 2)

    OR (o.indicador_bl_8 = 1 AND indin.indicadorbl_8 = 0)
    OR (o.indicador_bl_8 = 2)

    OR (o.indicador_bl_9 = 1 AND indin.indicadorbl_9 = 0)
    OR (o.indicador_bl_9 = 2)

    OR (o.indicador_bl_10 = 1 AND indin.indicadorbl_10 = 0)
    OR (o.indicador_bl_10 = 2)

    OR (o.indicador_bef_1 = 1 AND indin.indicadorbef_1 = 0)
    OR (o.indicador_bef_1 = 2)

    OR (o.indicador_bef_2 = 1 AND indin.indicadorbef_2 = 0)
    OR (o.indicador_bef_2 = 2)

    OR (o.indicador_bef_3 = 1 AND indin.indicadorbef_3 = 0)
    OR (o.indicador_bef_3 = 2)

    OR (o.indicador_bef_4 = 1 AND indin.indicadorbef_4 = 0)
    OR (o.indicador_bef_4 = 2)

    OR (o.indicador_bef_5 = 1 AND indin.indicadorbef_5 = 0)
    OR (o.indicador_bef_5 = 2)

    OR (o.indicador_bi_1 = 1 AND indin.indicadorbi_1 = 0)
    OR (o.indicador_bi_1 = 2)

    OR (o.indicador_bi_2 = 1 AND indin.indicadorbi_2 = 0)
    OR (o.indicador_bi_2 = 2)

    OR (o.indicador_bi_3 = 1 AND indin.indicadorbi_3 = 0)
    OR (o.indicador_bi_3 = 2)

    OR (o.indicador_bi_4 = 1 AND indin.indicadorbi_4 = 0)
    OR (o.indicador_bi_4 = 2)

    OR (o.indicador_bi_5 = 1 AND indin.indicadorbi_5 = 0)
    OR (o.indicador_bi_5 = 2)

    OR (o.indicador_bi_6 = 1 AND indin.indicadorbi_6 = 0)
    OR (o.indicador_bi_6 = 2)

    OR (o.indicador_bf_1 = 1 AND indin.indicadorbf_1 = 0)
    OR (o.indicador_bf_1 = 2)

    OR (o.indicador_bf_2 = 1 AND indin.indicadorbf_2 = 0)
    OR (o.indicador_bf_2 = 2)

    OR (o.indicador_bf_3 = 1 AND indin.indicadorbf_3 = 0)
    OR (o.indicador_bf_3 = 2)

    OR (o.indicador_bf_4 = 1 AND indin.indicadorbf_4 = 0)
    OR (o.indicador_bf_4 = 2)

    OR (o.indicador_bf_5 = 1 AND indin.indicadorbf_5 = 0)
    OR (o.indicador_bf_5 = 2) */
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
        JOIN 
        
            dbmetodologia.t1_principalhogar AS ph
          ON 
       hg.folio = ph.folio

			 LEFT JOIN 
        
            dbmetodologia.t1_integranteshogar AS ih
          ON 
       ph.idintegrantetitular = ih.idintegrante 



        LEFT JOIN 
            dbmetodologia.t1_oportunidad_hogares AS oh
            ON ih.idintegrante = oh.idintegrante 
             AND o.id_oportunidad = oh.idoportunidad
            -- AND ih.folio = oh.folio
        WHERE 
            ih.estado = 1 and hg.folio = ih.folio and o.aplica_hogar_integrante = '374'  " . ($folio != '' ? "AND ih.folio = $folio" : "") . "
             AND CURRENT_DATE BETWEEN o.fecha_inicio AND o.fecha_limite_acercamiento 
        GROUP BY 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad,
            o.id_oportunidad,
           o.aplica_hogar_integrante,
           oh.estado_oportunidad;
            ");


        return $resultado;
    }


      public function m_listadooportunidadesmovimientoindicadoreshogarffes($folio,$idintegrante,$id_bienestar, $id_indicador)
    {
        // Utilizando el Query Builder de Laravel para ejecutar el stored procedure
        $resultado = DB::select("  
        
SELECT 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad, 
            oh.estado_oportunidad,
            o.id_oportunidad,
            o.aplica_hogar_integrante
        FROM 
            dbmetodologia.t1_oportunidad AS o
JOIN dbmetodologia.t1_indicadores_hogar_ffes as indin
      ON (
     ".($id_bienestar == 1 && $id_indicador == 1  ? "(o.indicador_bse_1 = 1 AND indin.indicadorbse_1 = 0) " : "") . "
     ".($id_bienestar == 1 && $id_indicador == 2  ? "(o.indicador_bse_2 = 1 AND indin.indicadorbse_2 = 0)" : "") . "
     ".($id_bienestar == 1 && $id_indicador == 3  ? " (o.indicador_bse_3 = 1 AND indin.indicadorbse_3 = 0) ":"") ."
     ".($id_bienestar == 1 && $id_indicador == 4  ? " (o.indicador_bse_4 = 1 AND indin.indicadorbse_4 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 5  ? "(o.indicador_bse_5 = 1 AND indin.indicadorbse_5 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 6  ? "(o.indicador_bse_6 = 1 AND indin.indicadorbse_6 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 7  ? "(o.indicador_bse_7 = 1 AND indin.indicadorbse_7 = 0)":"") ."
     ".($id_bienestar == 1 && $id_indicador == 9  ? "(o.indicador_bse_9_ffes = 1 AND indin.indicadorbse_9_ffes = 0)":"") ."   
     ".($id_bienestar == 1 && $id_indicador == 10  ? "(o.indicador_bse_10_ffes = 1 AND indin.indicadorbse_10_ffes = 0)":"") ."   

     
     ".($id_bienestar == 2 && $id_indicador == 1  ? "(o.indicador_bl_1 = 1 AND indin.indicadorbl_1 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 2  ? "(o.indicador_bl_2 = 1 AND indin.indicadorbl_2 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 3  ? "(o.indicador_bl_3 = 1 AND indin.indicadorbl_3 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 4  ? "(o.indicador_bl_4 = 1 AND indin.indicadorbl_4 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 5  ? "(o.indicador_bl_5 = 1 AND indin.indicadorbl_5 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 6  ? "(o.indicador_bl_6 = 1 AND indin.indicadorbl_6 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 7  ? "(o.indicador_bl_7 = 1 AND indin.indicadorbl_7 = 0)":"") ."       
     ".($id_bienestar == 2 && $id_indicador == 8  ? "(o.indicador_bl_8 = 1 AND indin.indicadorbl_8 = 0)":"") ." 
     ".($id_bienestar == 2 && $id_indicador == 9  ? "(o.indicador_bl_9 = 1 AND indin.indicadorbl_9 = 0)":"") ."             
     ".($id_bienestar == 2 && $id_indicador == 10  ? "(o.indicador_bl_10 = 1 AND indin.indicadorbl_10 = 0)":"") ." 
     ".($id_bienestar == 2 && $id_indicador == 11  ? "(o.indicador_bl_11_ffes = 1 AND indin.indicadorbl_11_ffes = 0)":"") ."   
    
     
     ".($id_bienestar == 3 && $id_indicador == 1  ? "(o.indicador_bef_1 = 1 AND indin.indicadorbef_1 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 2  ? "(o.indicador_bef_2 = 1 AND indin.indicadorbef_2 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 3  ? "(o.indicador_bef_3 = 1 AND indin.indicadorbef_3 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 4  ? "(o.indicador_bef_4 = 1 AND indin.indicadorbef_4 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 5  ? "(o.indicador_bef_5 = 1 AND indin.indicadorbef_5 = 0)":"") ."     
     ".($id_bienestar == 3 && $id_indicador == 6  ? "(o.indicador_bef_6 = 1 AND indin.indicadorbef_6 = 0)":"") ." 
     ".($id_bienestar == 3 && $id_indicador == 7  ? "(o.indicador_bef_7_ffes = 1 AND indin.indicadorbef_7_ffes = 0)":"") ."   
     -- bienestar intelectual
    ".($id_bienestar == 4 && $id_indicador == 1   ? "(o.indicador_bi_1 = 1 AND indin.indicadorbi_1 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 2  ? "(o.indicador_bi_2 = 1 AND indin.indicadorbi_2 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 3  ? "(o.indicador_bi_3 = 1 AND indin.indicadorbi_3 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 4  ? "(o.indicador_bi_4 = 1 AND indin.indicadorbi_4 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 5  ? "(o.indicador_bi_5 = 1 AND indin.indicadorbi_5 = 0)":"") ."     
     ".($id_bienestar == 4 && $id_indicador == 6  ? "(o.indicador_bi_6 = 1 AND indin.indicadorbi_6 = 0)":"") ."     

     ".($id_bienestar == 5 && $id_indicador == 1  ? "(o.indicador_bf_1 = 1 AND indin.indicadorbf_1 = 0)":"") ."     
     ".($id_bienestar == 5 && $id_indicador == 2  ? "(o.indicador_bf_2 = 1 AND indin.indicadorbf_2 = 0)":"") ."     
     ".($id_bienestar == 5 && $id_indicador == 3  ? "(o.indicador_bf_3 = 1 AND indin.indicadorbf_3 = 0)":"") ."
     ".($id_bienestar == 5 && $id_indicador == 4  ? "(o.indicador_bf_4 = 1 AND indin.indicadorbf_4 = 0)":"") ."      
     ".($id_bienestar == 5 && $id_indicador == 5  ? "(o.indicador_bf_5 = 1 AND indin.indicadorbf_5 = 0)":"") ." 
           


/*

    (o.indicador_bse_1 = 1 AND indin.indicadorbse_1 = 0)  
    OR (o.indicador_bse_1 = 2)  

    OR (o.indicador_bse_2 = 1 AND indin.indicadorbse_2 = 0)
    OR (o.indicador_bse_2 = 2)

    OR (o.indicador_bse_3 = 1 AND indin.indicadorbse_3 = 0)
    OR (o.indicador_bse_3 = 2)

    OR (o.indicador_bse_4 = 1 AND indin.indicadorbse_4 = 0)
    OR (o.indicador_bse_4 = 2)

    OR (o.indicador_bse_5 = 1 AND indin.indicadorbse_5 = 0)
    OR (o.indicador_bse_5 = 2)

    OR (o.indicador_bse_6 = 1 AND indin.indicadorbse_6 = 0)
    OR (o.indicador_bse_6 = 2)

    OR (o.indicador_bse_7 = 1 AND indin.indicadorbse_7 = 0)
    OR (o.indicador_bse_7 = 2)

    OR (o.indicador_bl_1 = 1 AND indin.indicadorbl_1 = 0)
    OR (o.indicador_bl_1 = 2)

    OR (o.indicador_bl_2 = 1 AND indin.indicadorbl_2 = 0)
    OR (o.indicador_bl_2 = 2)

    OR (o.indicador_bl_3 = 1 AND indin.indicadorbl_3 = 0)
    OR (o.indicador_bl_3 = 2)

    OR (o.indicador_bl_4 = 1 AND indin.indicadorbl_4 = 0)
    OR (o.indicador_bl_4 = 2)

    OR (o.indicador_bl_5 = 1 AND indin.indicadorbl_5 = 0)
    OR (o.indicador_bl_5 = 2)

    OR (o.indicador_bl_6 = 1 AND indin.indicadorbl_6 = 0)
    OR (o.indicador_bl_6 = 2)

    OR (o.indicador_bl_7 = 1 AND indin.indicadorbl_7 = 0)
    OR (o.indicador_bl_7 = 2)

    OR (o.indicador_bl_8 = 1 AND indin.indicadorbl_8 = 0)
    OR (o.indicador_bl_8 = 2)

    OR (o.indicador_bl_9 = 1 AND indin.indicadorbl_9 = 0)
    OR (o.indicador_bl_9 = 2)

    OR (o.indicador_bl_10 = 1 AND indin.indicadorbl_10 = 0)
    OR (o.indicador_bl_10 = 2)

    OR (o.indicador_bef_1 = 1 AND indin.indicadorbef_1 = 0)
    OR (o.indicador_bef_1 = 2)

    OR (o.indicador_bef_2 = 1 AND indin.indicadorbef_2 = 0)
    OR (o.indicador_bef_2 = 2)

    OR (o.indicador_bef_3 = 1 AND indin.indicadorbef_3 = 0)
    OR (o.indicador_bef_3 = 2)

    OR (o.indicador_bef_4 = 1 AND indin.indicadorbef_4 = 0)
    OR (o.indicador_bef_4 = 2)

    OR (o.indicador_bef_5 = 1 AND indin.indicadorbef_5 = 0)
    OR (o.indicador_bef_5 = 2)

    OR (o.indicador_bi_1 = 1 AND indin.indicadorbi_1 = 0)
    OR (o.indicador_bi_1 = 2)

    OR (o.indicador_bi_2 = 1 AND indin.indicadorbi_2 = 0)
    OR (o.indicador_bi_2 = 2)

    OR (o.indicador_bi_3 = 1 AND indin.indicadorbi_3 = 0)
    OR (o.indicador_bi_3 = 2)

    OR (o.indicador_bi_4 = 1 AND indin.indicadorbi_4 = 0)
    OR (o.indicador_bi_4 = 2)

    OR (o.indicador_bi_5 = 1 AND indin.indicadorbi_5 = 0)
    OR (o.indicador_bi_5 = 2)

    OR (o.indicador_bi_6 = 1 AND indin.indicadorbi_6 = 0)
    OR (o.indicador_bi_6 = 2)

    OR (o.indicador_bf_1 = 1 AND indin.indicadorbf_1 = 0)
    OR (o.indicador_bf_1 = 2)

    OR (o.indicador_bf_2 = 1 AND indin.indicadorbf_2 = 0)
    OR (o.indicador_bf_2 = 2)

    OR (o.indicador_bf_3 = 1 AND indin.indicadorbf_3 = 0)
    OR (o.indicador_bf_3 = 2)

    OR (o.indicador_bf_4 = 1 AND indin.indicadorbf_4 = 0)
    OR (o.indicador_bf_4 = 2)

    OR (o.indicador_bf_5 = 1 AND indin.indicadorbf_5 = 0)
    OR (o.indicador_bf_5 = 2) */
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
        JOIN 
        
            dbmetodologia.t1_principalhogar AS ph
          ON 
       hg.folio = ph.folio

			 LEFT JOIN 
        
            dbmetodologia.t1_integranteshogar AS ih
          ON 
       ph.idintegrantetitular = ih.idintegrante 



        LEFT JOIN 
            dbmetodologia.t1_oportunidad_hogares AS oh
            ON ih.idintegrante = oh.idintegrante 
             AND o.id_oportunidad = oh.idoportunidad
            -- AND ih.folio = oh.folio
        WHERE 
            ih.estado = 1 and hg.folio = ih.folio and o.aplica_hogar_integrante = '374'  " . ($folio != '' ? "AND ih.folio = $folio" : "") . "
             AND CURRENT_DATE BETWEEN o.fecha_inicio AND o.fecha_limite_acercamiento 
        GROUP BY 
            ih.idintegrante, 
            ih.folio, 
            ih.nombre1, 
            ih.nombre2, 
            ih.apellido1, 
            ih.apellido2, 
            oh.idoportunidad,
            o.id_oportunidad,
           o.aplica_hogar_integrante,
           oh.estado_oportunidad;
            ");


        return $resultado;
    }




}
