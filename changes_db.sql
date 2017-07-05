INSERT INTO `grupo_permiso` (`codi_gpr`, `desc_gpr`, `esta_gpr`) VALUES
(NULL, 'Noticias', '1');

INSERT INTO `permiso` (`codi_per`, `desc_per`, `codi_gpr`, `esta_per`) VALUES
(NULL, 'Buscar noticia', '1', '1'),
(NULL, 'Leer noticia', '1', '1'),
(NULL, 'Registrar noticia', '1', '1'),
(NULL, 'Modificar noticia', '1', '1'),
(NULL, 'Habilitar noticia', '1', '1'),
(NULL, 'Deshabilitar noticia', '1', '1'),
(NULL, 'Eliminar noticia', '1', '1');
