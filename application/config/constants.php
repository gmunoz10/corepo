<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESCTRUCTIVE') OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code



/*
|--------------------------------------------------------------------------
| Facebook API
|--------------------------------------------------------------------------
*/
defined('APP_ID_FB')   				OR define('APP_ID_FB', '272185916518615');
defined('APP_SECRET_FB')   			OR define('APP_SECRET_FB', '30870218b0cc4b75bbca15f7967b9ce3');
defined('ACCESS_TOKEN_FB')   		OR define('ACCESS_TOKEN_FB', 'EAAD3jTjd8NcBAMEVA6f4mqy5SxLVKDMAnEew6szEjaHTLytupjtQn3FGoqCoUyzjzcgAc1ymMZCGz7doHsXaENoAVrZAOj7r5TLt353WjZB7IVULE1sNSIVzXEf8RldV8He8ShipupGJkiFAMhNkRtbkVkrQkfXTgHSxP9IEgZDZD');

/*
|--------------------------------------------------------------------------
| Permisos
|--------------------------------------------------------------------------
*/
// CUENTAS DE ACCESO
defined('BUSCAR_CUENTA')        		OR define('BUSCAR_CUENTA', 1);
defined('LEER_CUENTA')          		OR define('LEER_CUENTA', 2);
defined('REGISTRAR_CUENTA')     		OR define('REGISTRAR_CUENTA', 3);
defined('MODIFICAR_CUENTA')     		OR define('MODIFICAR_CUENTA', 4);
defined('HABILITAR_CUENTA')     		OR define('HABILITAR_CUENTA', 5);
defined('DESHABILITAR_CUENTA')     		OR define('DESHABILITAR_CUENTA', 6);
defined('ELIMINAR_CUENTA')  	   		OR define('ELIMINAR_CUENTA', 7);
defined('MODIFICAR_PERMISO_USUARIO')    OR define('MODIFICAR_PERMISO_USUARIO', 8);
// ROLES
defined('BUSCAR_ROL')     				OR define('BUSCAR_ROL', 9);
defined('LEER_ROL')          			OR define('LEER_ROL', 10);
defined('REGISTRAR_ROL')     			OR define('REGISTRAR_ROL', 11);
defined('MODIFICAR_ROL')     			OR define('MODIFICAR_ROL', 12);
defined('HABILITAR_ROL')     			OR define('HABILITAR_ROL', 13);
defined('DESHABILITAR_ROL')     		OR define('DESHABILITAR_ROL', 14);
defined('ELIMINAR_ROL')  	   			OR define('ELIMINAR_ROL', 15);
defined('MODIFICAR_PERMISO_ROL')     	OR define('MODIFICAR_PERMISO_ROL', 16);
// NOTICIA
defined('BUSCAR_NOTICIA')  				OR define('BUSCAR_NOTICIA', 17);
defined('LEER_NOTICIA')        			OR define('LEER_NOTICIA', 18);
defined('REGISTRAR_NOTICIA')   			OR define('REGISTRAR_NOTICIA', 19);
defined('MODIFICAR_NOTICIA')   			OR define('MODIFICAR_NOTICIA', 20);
defined('HABILITAR_NOTICIA')   			OR define('HABILITAR_NOTICIA', 21);
defined('DESHABILITAR_NOTICIA')			OR define('DESHABILITAR_NOTICIA', 22);
defined('ELIMINAR_NOTICIA')   			OR define('ELIMINAR_NOTICIA', 23);
