<?php

$indicadores_bse = [
        'indicadorbse_1' => $indicadoreshogar->indicadorbse_1,
        'indicadorbse_2' => $indicadoreshogar->indicadorbse_2,
        'indicadorbse_3' => $indicadoreshogar->indicadorbse_3,
        'indicadorbse_4' => $indicadoreshogar->indicadorbse_4,
        'indicadorbse_5' => $indicadoreshogar->indicadorbse_5,
        'indicadorbse_6' => $indicadoreshogar->indicadorbse_6,
        'indicadorbse_7' => $indicadoreshogar->indicadorbse_7,
    ];

            // Total de indicadores
        $total_indicadores = 7;
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo = count(array_filter($indicadores_bse, fn($indicador) => $indicador == 0));
        $verde = count(array_filter($indicadores_bse, fn($indicador) => $indicador == 1));
        $gris = count(array_filter($indicadores_bse, fn($indicador) => $indicador == 2));

        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bse = round(($rojo / $total_indicadores) * 100);
        $porcentaje_verde_bse = round(($verde / $total_indicadores) * 100);
        $porcentaje_gris_bse = round(($gris / $total_indicadores) * 100);

        //CALCULOS DE INDICADORES PARA BL

        $indicadores_bl = [
            'indicadorbl_1' => $indicadoreshogar->indicadorbl_1,
            'indicadorbl_2' => $indicadoreshogar->indicadorbl_2,
            'indicadorbl_3' => $indicadoreshogar->indicadorbl_3,
            'indicadorbl_4' => $indicadoreshogar->indicadorbl_4,
            'indicadorbl_5' => $indicadoreshogar->indicadorbl_5,
            'indicadorbl_6' => $indicadoreshogar->indicadorbl_6,
            'indicadorbl_7' => $indicadoreshogar->indicadorbl_7,
            'indicadorbl_8' => $indicadoreshogar->indicadorbl_8,
            'indicadorbl_9' => $indicadoreshogar->indicadorbl_9,
            'indicadorbl_10' => $indicadoreshogar->indicadorbl_10,
        ];
        
        // Total de indicadores
        $total_indicadores_bl = 10;
        
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo_bl = count(array_filter($indicadores_bl, fn($indicador) => $indicador == 0));
        $verde_bl = count(array_filter($indicadores_bl, fn($indicador) => $indicador == 1));
        $gris_bl = count(array_filter($indicadores_bl, fn($indicador) => $indicador == 2));
        
        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bl = round(($rojo_bl / $total_indicadores_bl) * 100);
        $porcentaje_verde_bl = round(($verde_bl / $total_indicadores_bl) * 100);
        $porcentaje_gris_bl = round(($gris_bl / $total_indicadores_bl) * 100);
        
        // CALCULOS INDICADORES PARA BEF

        $indicadores_bef = [
            'indicadorbef_1' => $indicadoreshogar->indicadorbef_1,
            'indicadorbef_2' => $indicadoreshogar->indicadorbef_2,
            'indicadorbef_3' => $indicadoreshogar->indicadorbef_3,
            'indicadorbef_4' => $indicadoreshogar->indicadorbef_4,
            'indicadorbef_5' => $indicadoreshogar->indicadorbef_5,
        ];
        
        // Total de indicadores
        $total_indicadores_bef = 5;
        
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo_bef = count(array_filter($indicadores_bef, fn($indicador) => $indicador == 0));
        $verde_bef = count(array_filter($indicadores_bef, fn($indicador) => $indicador == 1));
        $gris_bef = count(array_filter($indicadores_bef, fn($indicador) => $indicador == 2));
        
        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bef = round(($rojo_bef / $total_indicadores_bef) * 100);
        $porcentaje_verde_bef = round(($verde_bef / $total_indicadores_bef) * 100);
        $porcentaje_gris_bef = round(($gris_bef / $total_indicadores_bef) * 100);

        //CALCULO INDICADORES BI


        $indicadores_bi = [
            'indicadorbi_1' => $indicadoreshogar->indicadorbi_1,
            'indicadorbi_2' => $indicadoreshogar->indicadorbi_2,
            'indicadorbi_3' => $indicadoreshogar->indicadorbi_3,
            'indicadorbi_4' => $indicadoreshogar->indicadorbi_4,
            'indicadorbi_5' => $indicadoreshogar->indicadorbi_5,
            'indicadorbi_6' => $indicadoreshogar->indicadorbi_6,
        ];
        
        // Total de indicadores
        $total_indicadores_bi = 6;
        
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo_bi = count(array_filter($indicadores_bi, fn($indicador) => $indicador == 0));
        $verde_bi = count(array_filter($indicadores_bi, fn($indicador) => $indicador == 1));
        $gris_bi = count(array_filter($indicadores_bi, fn($indicador) => $indicador == 2));
        
        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bi = round(($rojo_bi / $total_indicadores_bi) * 100);
        $porcentaje_verde_bi = round(($verde_bi / $total_indicadores_bi) * 100);
        $porcentaje_gris_bi = round(($gris_bi / $total_indicadores_bi) * 100);
        
        //INDICADORES PARA BF

        $indicadores_bf = [
            'indicadorbf_1' => $indicadoreshogar->indicadorbf_1,
            'indicadorbf_2' => $indicadoreshogar->indicadorbf_2,
            'indicadorbf_3' => $indicadoreshogar->indicadorbf_3,
            'indicadorbf_4' => $indicadoreshogar->indicadorbf_4,
            'indicadorbf_5' => $indicadoreshogar->indicadorbf_5,
        ];
        
        // Total de indicadores
        $total_indicadores_bf = 5;
        
        // Contamos cuántos indicadores tienen el valor 0 (rojo), 1 (verde), o 2 (gris)
        $rojo_bf = count(array_filter($indicadores_bf, fn($indicador) => $indicador == 0));
        $verde_bf = count(array_filter($indicadores_bf, fn($indicador) => $indicador == 1));
        $gris_bf = count(array_filter($indicadores_bf, fn($indicador) => $indicador == 2));
        
        // Calculamos el porcentaje de cada color
        $porcentaje_rojo_bf = round(($rojo_bf / $total_indicadores_bf) * 100);
        $porcentaje_verde_bf = round(($verde_bf / $total_indicadores_bf) * 100);
        $porcentaje_gris_bf = round(($gris_bf / $total_indicadores_bf) * 100);
    ?>