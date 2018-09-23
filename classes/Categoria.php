<?php

class Categoria {
    // Atributos para pode ter Acesso ou Setar
    public $id;
    public $nome;


    // MÉTODOS
    public function __construct($id = false){
        if($id) {
            $this->id = $id;
            $this->carregar();
        }

    }

    public function listar() {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::pegarConexao(); // pegando a Classe e metodo do arquivo Conexao
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function carregar(){
        $query = "SELECT id, nome FROM categorias WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
            foreach ($lista as $linha) {
                // com esse retorno, a PRIMEIRA LINHA que ele receber vai trazer
               $this->nome = $linha['nome'];
            }
    }

    public function inserir() {
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }

    public function atualizar() {                   //SETando                      // SETando   
        $query = "UPDATE categorias SET nome = '" . $this->nome . "' WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);  
    }

 
    public function excluir(){
        $query = "DELETE FROM categorias WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
}