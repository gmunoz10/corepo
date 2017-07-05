<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = "MainController";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['nosotros'] = "MainController/nosotros";
$route['noticia/(:num)'] = "PrensaController/noticia/$1";
$route['noticia/page'] = "PrensaController/lista_noticia";
$route['noticia/page/(:num)'] = "PrensaController/lista_noticia/$1";

$route['login'] = "MainController/login";
$route['validar_login'] = "SessionController/validar_login";
$route['cambiar_clave'] = "SessionController/cambiar_clave";
$route['update_cont'] = "UsuarioController/update_cont";
$route['logout'] = "SessionController/logout";

$route['permiso/rol'] = "PermisoController/rol";
$route['permiso/get_permisos_rol'] = "PermisoController/get_permisos_rol";
$route['permiso/save_permiso_rol'] = "PermisoController/save_permiso_rol";
$route['permiso/get_permisos_usuario'] = "PermisoController/get_permisos_usuario";
$route['permiso/save_permiso_usuario'] = "PermisoController/save_permiso_usuario";

$route['usuario'] = "UsuarioController/index";
$route['usuario/paginate'] = "UsuarioController/paginate";
$route['usuario/check_nomb_usu'] = "UsuarioController/check_nomb_usu";
$route['usuario/check_nomb_usu_actualizar'] = "UsuarioController/check_nomb_usu_actualizar";
$route['usuario/check_cont_usu'] = "UsuarioController/check_cont_usu";
$route['usuario/save'] = "UsuarioController/save";
$route['usuario/update'] = "UsuarioController/update";
$route['usuario/habilitar'] = "UsuarioController/habilitar";
$route['usuario/deshabilitar'] = "UsuarioController/deshabilitar";
$route['usuario/eliminar'] = "UsuarioController/eliminar";

$route['rol'] = "RolController/index";
$route['rol/paginate'] = "RolController/paginate";
$route['rol/check_desc_rol'] = "RolController/check_desc_rol";
$route['rol/check_desc_rol_actualizar'] = "RolController/check_desc_rol_actualizar";
$route['rol/save'] = "RolController/save";
$route['rol/update'] = "RolController/update";
$route['rol/habilitar'] = "RolController/habilitar";
$route['rol/deshabilitar'] = "RolController/deshabilitar";
$route['rol/eliminar'] = "RolController/eliminar";


$route['noticia'] = "PrensaController/index";
$route['noticia/paginate'] = "PrensaController/paginate";
$route['noticia/check_nume_not'] = "PrensaController/check_nume_not";
$route['noticia/check_nume_not_actualizar'] = "PrensaController/check_nume_not_actualizar";
$route['noticia/save'] = "PrensaController/save";
$route['noticia/update'] = "PrensaController/update";
$route['noticia/habilitar'] = "PrensaController/habilitar";
$route['noticia/deshabilitar'] = "PrensaController/deshabilitar";
$route['noticia/eliminar'] = "PrensaController/eliminar";
$route['noticia/uploadImage'] = "PrensaController/uploadImage";
