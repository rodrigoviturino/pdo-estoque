<?php

require_once('classes/Conexao.php');

class Categoria
{
    // Atributos para pode ter Acesso ou Setar
    public $id;
    public $nome;

    public function listar() {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::pegarConexao(); // pegando a Classe e metodo do arquivo Conexao
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    public function inserir() {
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }

    public function atualizar() {
        $query = "UPDATE categorias SET nome = '" . $this->nome . "' WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);  
    }
}