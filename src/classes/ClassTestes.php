<?php

namespace Src\Classes;


class ClassTestes
{
    public function lerArquivo()
    {
        $arquivo = "C:/Email/archives/emails.txt";
        $handle = fopen($arquivo, "r");
        while (!feof($handle)) {
            $nome = fgets($handle, 4096);

            echo $nome . "<br>";
        }
        fclose($handle);
    }
}
