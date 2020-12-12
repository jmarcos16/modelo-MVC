<?php

namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes
{

    #atributos
    private $Method;
    private $Param = [];
    private $Obj;

    protected function getMethod()
    {
        return $this->Method;
    }
    public function setMethod($Method)
    {
        $this->Method = $Method;
    }
    protected function getParam()
    {
        return $this->Param;
    }
    public function setParam($Param)
    {
        $this->Param = $Param;
    }


    #metodo contrutor
    public function __construct()
    {
        self::addController();
    }

    #metodo de adcão de controller
    private function addController()
    {
        $RotaController = $this->getRota();
        $NameS = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameS;

        if (isset($this->parseUrl()[1])) {
            self::addMethod();
        }
    }

    #metodo de adção de metodo de controller
    private function addMethod()
    {
        if (method_exists($this->Obj, $this->parseUrl()[1])) {
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
        }
    }
    #metodo de adção de parametros do controller
    private function addParam()
    {
        $ContArray = count($this->parseUrl());
        if ($ContArray > 2) {
            foreach ($this->parseUrl() as $Key => $Value) {
                if ($Key > 1) {
                    $this->setParam($this->Param += [$Key => $Value]);
                }
            }
        }
    }
}
