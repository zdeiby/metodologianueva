-- Crear la tabla si no existe
CREATE TABLE IF NOT EXISTS `t1_caracterizacionIntegrante_primeraInfancia` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `folio` varchar(255) NOT NULL,
  `idintegrante` int(11) NOT NULL,
  `servicio_primera_infancia` varchar(255) NOT NULL,
  `documento_profesional` varchar(255) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT 1,
  `sincro` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `folio_idintegrante_index` (`folio`, `idintegrante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
