<?php

namespace App\Model;

class ClassPesquisa extends ClassConexao
{
    public $cpfs;

    public function pesquisaCPF()
    {
        $this->cpfs = $this->conexaoDB()->query("SELECT DISTINCT TOP 100 LOWER(DEV_EMAIL) E_MAIL , TIT_CPF
        FROM [192.168.1.204].DB_GESTAO_VITTI.DBO.DEVEDOR_EMAIL E
        LEFT JOIN BIREDE.DBO.BASE_CONTRA_TEMP BCT ON BCT.TIT_CPF COLLATE DATABASE_DEFAULT = E.DEV_CPF
        WHERE CHARINDEX('ZEMA.COM', UPPER(DEV_EMAIL), 1) <= 0
        AND BCT.TIT_CLIENTE =1001");
        foreach ($this->cpfs as $row) {
            echo "<strong>Email:</strong> " . $row['E_MAIL'] . "<br>";
            echo "<strong>Cpf:</strong> " . $row['TIT_CPF'] . "<br>";
        }
    }
}
