<?php

namespace Src\Classes;


class ClassBat
{
    public function executarBat()
    {
        shell_exec("//192.168.1.206/htdocs/sendemail/teste.bat");
    }
}
