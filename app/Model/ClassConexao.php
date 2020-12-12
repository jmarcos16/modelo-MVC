<?php

namespace App\Model;

class ClassConexao

#Realiza conexao com o Banco de dados.
{
    public function conexaoDB()
    {
        try {
            $conn = new \PDO('odbc:Driver={SQL Server};Server=' . DB_HOST1 . ';Database=' . DB_NAME1 . '; Uid=' . DB_USER1 . ';Pwd=' . DB_PASS1 . ';');
            return $conn;
        } catch (\PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}
