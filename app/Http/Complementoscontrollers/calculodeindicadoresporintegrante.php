<?php

// Cálculos de los indicadores para los integrantes en BSE
$indicadores_bse_integrante = [
    'indicadorbse_1' => $indicadoresintegrantes->indicadorintegrantebse_1,
    'indicadorbse_2' => $indicadoresintegrantes->indicadorintegrantebse_2,
    'indicadorbse_3' => $indicadoresintegrantes->indicadorintegrantebse_3,
    'indicadorbse_4' => $indicadoresintegrantes->indicadorintegrantebse_4,
    'indicadorbse_5' => $indicadoresintegrantes->indicadorintegrantebse_5,
    'indicadorbse_6' => $indicadoresintegrantes->indicadorintegrantebse_6,
];

$total_indicadores_bse_integrante = 6;
$rojo_bse_integrante = count(array_filter($indicadores_bse_integrante, fn($indicador) => $indicador == 0));
$verde_bse_integrante = count(array_filter($indicadores_bse_integrante, fn($indicador) => $indicador == 1));
$gris_bse_integrante = count(array_filter($indicadores_bse_integrante, fn($indicador) => $indicador == 2));

$porcentaje_rojo_bse_integrante = round(($rojo_bse_integrante / $total_indicadores_bse_integrante) * 100);
$porcentaje_verde_bse_integrante = round(($verde_bse_integrante / $total_indicadores_bse_integrante) * 100);
$porcentaje_gris_bse_integrante = round(($gris_bse_integrante / $total_indicadores_bse_integrante) * 100);

// Cálculos de indicadores para BL
$indicadores_bl_integrante = [
    'indicadorbl_1' => $indicadoresintegrantes->indicadorintegrantebl_1,
    'indicadorbl_2' => $indicadoresintegrantes->indicadorintegrantebl_2,
    'indicadorbl_3' => $indicadoresintegrantes->indicadorintegrantebl_3,
    'indicadorbl_4' => $indicadoresintegrantes->indicadorintegrantebl_4,
    'indicadorbl_5' => $indicadoresintegrantes->indicadorintegrantebl_5,
    'indicadorbl_6' => $indicadoresintegrantes->indicadorintegrantebl_6,
    'indicadorbl_7' => $indicadoresintegrantes->indicadorintegrantebl_7,
    'indicadorbl_8' => $indicadoresintegrantes->indicadorintegrantebl_8,
    'indicadorbl_10' => $indicadoresintegrantes->indicadorintegrantebl_10,
];

$total_indicadores_bl_integrante = 9;
$rojo_bl_integrante = count(array_filter($indicadores_bl_integrante, fn($indicador) => $indicador == 0));
$verde_bl_integrante = count(array_filter($indicadores_bl_integrante, fn($indicador) => $indicador == 1));
$gris_bl_integrante = count(array_filter($indicadores_bl_integrante, fn($indicador) => $indicador == 2));

$porcentaje_rojo_bl_integrante = round(($rojo_bl_integrante / $total_indicadores_bl_integrante) * 100);
$porcentaje_verde_bl_integrante = round(($verde_bl_integrante / $total_indicadores_bl_integrante) * 100);
$porcentaje_gris_bl_integrante = round(($gris_bl_integrante / $total_indicadores_bl_integrante) * 100);

// Repite el mismo proceso para BI y BF como sigue:
$indicadores_bi_integrante = [
    'indicadorbi_1' => $indicadoresintegrantes->indicadorintegrantebi_1,
    'indicadorbi_2' => $indicadoresintegrantes->indicadorintegrantebi_2,
    'indicadorbi_3' => $indicadoresintegrantes->indicadorintegrantebi_3,
    'indicadorbi_4' => $indicadoresintegrantes->indicadorintegrantebi_4,
    'indicadorbi_5' => $indicadoresintegrantes->indicadorintegrantebi_5,
    'indicadorbi_6' => $indicadoresintegrantes->indicadorintegrantebi_6,
];

$total_indicadores_bi_integrante = 6;
$rojo_bi_integrante = count(array_filter($indicadores_bi_integrante, fn($indicador) => $indicador == 0));
$verde_bi_integrante = count(array_filter($indicadores_bi_integrante, fn($indicador) => $indicador == 1));
$gris_bi_integrante = count(array_filter($indicadores_bi_integrante, fn($indicador) => $indicador == 2));

$porcentaje_rojo_bi_integrante = round(($rojo_bi_integrante / $total_indicadores_bi_integrante) * 100);
$porcentaje_verde_bi_integrante = round(($verde_bi_integrante / $total_indicadores_bi_integrante) * 100);
$porcentaje_gris_bi_integrante = round(($gris_bi_integrante / $total_indicadores_bi_integrante) * 100);

$indicadores_bf_integrante = [
    'indicadorbf_1' => $indicadoresintegrantes->indicadorintegrantebf_1,
    'indicadorbf_2' => $indicadoresintegrantes->indicadorintegrantebf_2,
    'indicadorbf_3' => $indicadoresintegrantes->indicadorintegrantebf_3,
    'indicadorbf_5' => $indicadoresintegrantes->indicadorintegrantebf_5,
];

$total_indicadores_bf_integrante = 4;
$rojo_bf_integrante = count(array_filter($indicadores_bf_integrante, fn($indicador) => $indicador == 0));
$verde_bf_integrante = count(array_filter($indicadores_bf_integrante, fn($indicador) => $indicador == 1));
$gris_bf_integrante = count(array_filter($indicadores_bf_integrante, fn($indicador) => $indicador == 2));

$porcentaje_rojo_bf_integrante = round(($rojo_bf_integrante / $total_indicadores_bf_integrante) * 100);
$porcentaje_verde_bf_integrante = round(($verde_bf_integrante / $total_indicadores_bf_integrante) * 100);
$porcentaje_gris_bf_integrante = round(($gris_bf_integrante / $total_indicadores_bf_integrante) * 100);

?>
