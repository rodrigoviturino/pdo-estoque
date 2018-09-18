<?php

require_once('classes/Conexao.php');

class Categoria {
    // Atributos para pode ter Acesso ou Setar
    public $id;
    public $nome;

    public function listar() {
        $query = "SELECT id, nome FROM categorias";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=estoque', 'root',''); // pegando a Classe e metodo do arquivo Conexao
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function carregar(){
        $query = "SELECT id, nome FROM categorias WHERE id = " . $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=estoque', 'root','');
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
            foreach ($lista as $linha) {
                // com esse retorno, a PRIMEIRA LINHA que ele receber vai trazer
                return $linha;
            }
    }


    public function inserir() {
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=estoque','root','');
        $conexao->exec($query);
    }

    public function atualizar() {                   //SETando                      // SETando   
        $query = "UPDATE categorias SET nome = '" . $this->nome . "' WHERE id = " . $this->id;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);  
    }
}