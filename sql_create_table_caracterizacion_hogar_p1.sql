-- Crear la tabla si no existe
CREATE TABLE IF NOT EXISTS `t1_caracterizacion_hogar_p1` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `folio` varchar(255) NOT NULL,
  `idintegrante` int(11) NOT NULL,
  `actualizacion` text NOT NULL,
  `documento_profesional` varchar(255) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT 1,
  `sincro` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `t1_caracterizacion_hogar_p1_folio_index` (`folio`),
  KEY `t1_caracterizacion_hogar_p1_idintegrante_index` (`idintegrante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
