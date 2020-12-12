<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao
{
    private $Db;
    protected function cadastroCliente($Nome, $Sexo, $Cidade)
    {
        $Id = 0;
        $this->Db = $this->conexaoDB()->prepare("INSERT INTO acessosexternos VALUES(:id, :nome, :sexo, :cidade)");
        $this->Db->bindParam(":id", $Id, \PDO::PARAM_INT);
        $this->Db->bindParam(":nome", $Nome, \PDO::PARAM_INT);
        $this->Db->bindParam(":sexo", $Sexo, \PDO::PARAM_INT);
        $this->Db->bindParam(":cidade", $Cidade, \PDO::PARAM_INT);
        $this->Db->execute();
    }
}
