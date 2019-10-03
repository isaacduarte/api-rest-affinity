<?php
include '../../conexao/Conexao.php';

class Loja extends Conexao
{
    private $descricao;

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function insert($obj)
    {
        $sql = "INSERT INTO adquirente(descricao) VALUES (:descricao)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('descricao', $obj->descricao);
        return $consulta->execute();

    }

    public function update($obj, $id = null)
    {
        $sql = "UPDATE adquirente SET descricao = :descricao WHERE id_adquirente = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('descricao', $obj->descricao);
        return $consulta->execute();
    }

    public function delete($obj, $id = null)
    {
        $sql = "SELECT * FROM ";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

    public function find($id = null)
    {

    }

    public function findAll()
    {
        $sql = "SELECT * FROM adquirente";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

}
