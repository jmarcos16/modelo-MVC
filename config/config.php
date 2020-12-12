<?php

#Arquivos diretorios raizes

$pastainterna = '';
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/sendemail/{$pastainterna}");

if (substr($_SERVER['DOCUMENT_ROOT'], -1) === '/') {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/sendemail/{$pastainterna}");
} else {
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/sendemail/{$pastainterna}");
}
#Diretorios Esepecificos

define('DIRIMG', DIRPAGE . "public/img/");
define('DIRCSS', DIRPAGE . "/public/css/");
define('DIRAUDIO', DIRPAGE . "public/audio/");
define('DIRVIDEO', DIRPAGE . "/public/video/");
define('DIRJS', DIRPAGE . "/public/js/");


#Acesso ao banco de dados

define('HOST', 'localhost');
define('DB', 'namedb');
define('USER', 'root');
define('PASS', '1655');


define('DB_HOST1', 'PHONEDATACENTER');
define('DB_NAME1', 'BIREDE');
define('DB_USER1', 'sa');
define('DB_PASS1', '1234');
