<?php
include '../../conexao/Conexao.php';

class Loja extends Conexao
{
    private $cnpj;
    private $id_cliente; 

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getId_cliente()
    {
        return $this->id_cliente;
    }

    public function setCnpj($telefone)
    {
        $this->cnpj = $cnpj;
    }

    public function setId_cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    public function insert($obj){
        $sql = "INSERT INTO loja(cnpj, id_cliente) VALUES (:cnpj, :id_cliente)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('cnpj', $obj->cnpj);
        $consulta->bindValue('id_cliente', $obj->id_cliente);
        return $consulta->execute();

    }

    public function update($obj, $id = null)
    {
        $sql = "UPDATE loja SET cnpj = :cnpj, id_cliente = :id_cliente WHERE id_loja = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('cnpj', $obj->cnpj);
        $consulta->bindValue('id_cliente', $obj->id_cliente);
        $consulta->bindValue('id_loja', $id);
        return $consulta->execute();
    }

    public function delete($obj, $id = null)
    {
        $sql = "SELECT * FROM loja";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

    public function find($id = null)
    {

    }

    public function findAll()
    {
        $sql = "SELECT * FROM cliente";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

}
