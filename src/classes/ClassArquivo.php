<?php

namespace Src\Classes;


class ClassArquivo
{

    public function enviarArquivo($arquivo)
    {
        $diretorio = "C:/Email/archives/";
        if (\move_uploaded_file($arquivo['tmp_name'], $diretorio . $arquivo['name'])) {
            echo "Enviado";
        } else {
            echo "Erro";
        }
    }
}


