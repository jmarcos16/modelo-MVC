<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerCadastro extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Cadastro");
        $this->setDescription("Faça o seu cadastro");
        $this->setKeywords("cobrança para empresas, sistemad de cobrança");
        $this->setDir("cs");
        $this->renderLayout();
        echo "Oi";
    }
}
