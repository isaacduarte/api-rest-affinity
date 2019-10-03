<?php
include '../../conexao/Conexao.php';

class Cliente extends Conexao
{
    private $nome;
    private $telefone;
    private $email;
    private $status;
    private $id_usuario;

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function insert($obj)
    {
        $sql = "INSERT INTO cliente(nome, telefone, email, status, id_usuario) VALUES (:nome, :telefone, :email, :status, :id_usuario)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('telefone', $obj->telefone);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('status', $obj->status);
        $consulta->bindValue('id_usuario', $obj->id_usuario);
        return $consulta->execute();

    }

    public function update($obj, $id = null)
    {
        $sql = "UPDATE cliente SET nome = :nome, telefone = :telefone, email = :email, status = :status, id_usuario = :id_usuario WHERE id_cliente = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('telefone', $obj->telefone);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('status', $obj->status);
        $consulta->bindValue('id_usuario', $obj->id_usuario);
        $consulta->bindValue('id_cliente', $id);
        return $consulta->execute();
    }

    public function delete($obj, $id = null)
    {
        $sql = "UPDATE FROM cliente SET id_usuario = 0 WHERE id_cliente = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_usuario', $id);
        $consulta->execute();
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
