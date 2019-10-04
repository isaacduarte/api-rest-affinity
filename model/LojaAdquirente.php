<?php
include '../../conexao/Conexao.php';

class LojaAdquirente extends Conexao
{
    private $id_loja;
    private $id_adquirente;

    public function getId_loja()
    {
        return $this->id_loja;
    }

    public function getId_adquirente()
    {
        return $this->id_adquirente;
    }

    public function setId_loja($id_loja)
    {
        return $this->id_loja= $id_loja;
    }

    public function setId_adquirente($id_adquirente)
    {
        $this->id_adquirente = $id_adquirente;
    }

    public function insert($obj)
    {
        $sql = "INSERT INTO loja_adquirente(id_loja, id_adquirente) VALUES (:id_loja, :id_adquirente)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_loja', $obj->id_loja);
        $consulta->bindValue('id_adquirente', $obj->id_adquirente);
        return $consulta->execute();

    }

    public function update($obj, $id = null)
    {
        $sql = "UPDATE loja_adquirente SET id_loja = :id_loja, id_adquirente = :id_adquirente WHERE id_loja_adquirente = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('descricao', $obj->descricao);
        return $consulta->execute();
    }

    public function delete($obj, $id = null)
    {
        $sql = "SELECT * FROM loja_adquirente WHERE id_loja_adquirente= :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

    public function find($id = null)
    {

    }

    public function findAll()
    {
        $sql = "SELECT * FROM loja_adquirente";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

}
