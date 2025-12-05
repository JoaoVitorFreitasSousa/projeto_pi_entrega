<?php
//Em qual pasta ele esta
namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;

//Mesmo nome do arquivo
class Produto{
    //Aqui declaramos uma funcao para cada operacao do CRUD
    //  Busca todos os usuarios no BD
    public static function buscarTodos(){
        //Primeiro vamos conectar no banco de dados
        //Precisamos importar o PDO antes de criar a classe
        //Como vamos utilizar arquivos DATABASE, importamos ele também
        $pdo = Database::conectar();

        //Geremos o script SQL de consulta
        $sql = "SELECT * FROM produtos";

        //Retornamos o resultado da consulta
        return $pdo->query($sql)->fetchAll();
    }

    public static function salvar($dados){
        try{
            $pdo = Database::conectar();
            

            $sql = "INSERT INTO produtos (titulo, autor, preco, descricao) ";
            $sql .= "VALUES(:titulo, :autor, :preco, :descricao)";

            //Prepare o SQL para ser inserido no BD e limpa codigos maliciosos
            $stmt =$pdo->prepare($sql);

            //Passa as variaveis para o SQL
            $stmt->bindParam(':titulo', $dados['titulo'], PDO::PARAM_STR);
            $stmt->bindParam(':autor', $dados['autor'], PDO::PARAM_STR);
            $stmt->bindParam(':preco', $dados['preco'], PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
           

            

            
            //Executa o SQL
            $stmt->execute();
            //Retorna o ID de registro no BD
            return(int) $pdo->lastInsertId();

        }catch (PDOException $e){
            echo "Erro ao inserir: " . $e->getMessage();
            exit;
        }
    }
}