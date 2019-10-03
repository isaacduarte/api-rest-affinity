<?php
include '../../conexao/Conexao.php';

class Usuario extends Conexao
{
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $login;
    private $senha;
    private $nivel;
    private $cnpj;
    private $inscricao;
    private $filiado;

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getInscricao()
    {
        return $this->inscricao;
    }

    public function getFiliado()
    {
        return $this->filiado;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function setInscricao($inscricao)
    {
        $this->inscricao = $inscricao;
    }

    public function setFiliado($filiado)
    {
        $this->filiado = $filiado;
    }

    public function insert($obj)
    {
        $sql = "INSERT INTO usuario(nome, cpf, email, telefone, login, senha, nivel, cnpj, inscricao, filiado) VALUES (:nome, :cpf, :email, :telefone, :login, :senha, :nivel, :cnpj, :inscricao, :filiado)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('cpf', $obj->cpf);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('telefone', $obj->telefone);
        $consulta->bindValue('login', $obj->login);
        $consulta->bindValue('senha', $obj->senha);
        $consulta->bindValue('nivel', $obj->nivel);
        $consulta->bindValue('cnpj', $obj->cnpj);
        $consulta->bindValue('inscricao', $obj->inscricao);
        $consulta->bindValue('filiado', $obj->filiado);
        return $consulta->execute();

    }

    public function update($obj, $id = null)
    {
        $sql = "UPDATE usuario SET nome = :nome, cpf = :cpf, email = :email, telefone = :telefone, login = :login, senha = :senha, nivel = :nivel, cnpj = :cnpj, inscricao = :inscricao, filiado = :filiado WHERE id_usuario = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('cpf', $obj->cpf);
        $consulta->bindValue('email', $obj->email);
        $consulta->bindValue('telefone', $obj->telefone);
        $consulta->bindValue('login', $obj->login);
        $consulta->bindValue('senha', $obj->senha);
        $consulta->bindValue('nivel', $obj->nivel);
        $consulta->bindValue('cnpj', $obj->cnpj);
        $consulta->bindValue('inscricao', $obj->inscricao);
        $consulta->bindValue('filiado', $obj->filiado);
        $consulta->bindValue('id_usuario', $id);
        return $consulta->execute();
    }

    public function delete($obj, $id = null)
    {
        $sql = "DELETE FROM usuario WHERE id_usuario = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id_usuario', $id);
        $consulta->execute();
    }

    public function find($id = null)
    {

    }

    public function findAll()
    {
        $sql = "SELECT * FROM usuario";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

}
