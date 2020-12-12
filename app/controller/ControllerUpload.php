<?php

namespace App\Controller;

use Src\Classes\Arquivos;
use Src\Classes\ClassArquivo;
use Src\Classes\enviarArquivos;
use Src\Classes\ClassRender;
use Src\interfaces\InterfaceView;

class ControllerUpload extends ClassArquivo
{

    public function __construct()
    {
        $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
        $this->enviarArquivo($arquivo);
        header('Location: http://192.168.1.206:81/sendemail/enviaremail');
    }
}
