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

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    public function setCurso_id($curso_id)
    {
        $this->curso_id = $curso_id;
    }

    public function setPeriodo_id($periodo_id)
    {
        $this->periodo_id = $periodo_id;
    }

    public function setDisciplina_id($disciplina_id)
    {
        $this->disciplina_id = $disciplina_id;
    }

    public function insert($obj)
    {
        $sql = "INSERT INTO conteudo(titulo,descricao,horario,curso_id,periodo_id,disciplina_id) VALUES (:titulo,:descricao,:horario,:curso_id,:periodo_id,:disciplina_id)";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('titulo', $obj->titulo);
        $consulta->bindValue('descricao', $obj->descricao);
        $consulta->bindValue('horario', $obj->horario);
        $consulta->bindValue('curso_id', $obj->curso_id);
        $consulta->bindValue('periodo_id', $obj->periodo_id);
        $consulta->bindValue('disciplina_id', $obj->periodo_id);
        return $consulta->execute();

    }

    public function update($obj, $id = null)
    {
        $sql = "UPDATE conteudo SET titulo = :titulo, descricao = :descricao,horario = :horario, curso_id = :curso_id,periodo_id =:periodo_id, disciplina_id = :disciplina_id WHERE id = :id ";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('titulo', $obj->titulo);
        $consulta->bindValue('descricao', $obj->descricao);
        $consulta->bindValue('horario', $obj->horario);
        $consulta->bindValue('curso_id', $obj->curso_id);
        $consulta->bindValue('periodo_id', $obj->periodo_id);
        $consulta->bindValue('disciplina_id', $obj->disciplina_id);
        $consulta->bindValue('id', $id);
        return $consulta->execute();
    }

    public function delete($obj, $id = null)
    {
        $sql = "DELETE FROM conteudo WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id', $id);
        $consulta->execute();
    }

    public function find($id = null)
    {

    }

    public function findAll()
    {
        $sql = "SELECT * FROM conteudo";
        $consulta = Conexao::prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
    }

}
