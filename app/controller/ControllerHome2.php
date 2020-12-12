<?php

namespace App\Controller;

use Src\Classes\ClassBat;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome2 extends ClassBat
{
    public function __construct()
    {
        $this->executarBat();
        header('Location: http://192.168.1.206:81/sendemail/');
    }
}
