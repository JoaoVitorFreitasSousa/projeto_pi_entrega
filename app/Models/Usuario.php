<?php
//Em qual pasta ele esta
namespace App\Models;

use PDO;
use App\Core\Database;
use PDOException;

//Mesmo nome do arquivo
class Usuario{
    //Aqui declaramos uma funcao para cada operacao do CRUD
    //  Busca todos os usuarios no BD
    public static function buscarTodos(){
        //Primeiro vamos conectar no banco de dados
        //Precisamos importar o PDO antes de criar a classe
        //Como vamos utilizar arquivos DATABASE, importamos ele também
        $pdo = Database::conectar();

        //Geremos o script SQL de consulta
        $sql = "SELECT * FROM usuarios";

        //Retornamos o resultado da consulta
        return $pdo->query($sql)->fetchAll();
    }

    public static function salvar($dados){
        try{
            $pdo = Database::conectar();
            $senha_criptografada = password_hash($dados['senha'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuarios (nome, nome_social, genero, cpf, rg, data_nascimento, celular, rua, numero, complemento, bairro, cidade, cep, estado, email, nivel_acesso, senha) ";
            $sql .= "VALUES(:nome, :nome_social, :genero, :cpf, :rg, :data_nascimento, :celular, :rua, :numero, :complemento, :bairro, :cidade, :cep, :estado, :email, :nivel_acesso, :senha)";

            //Prepare o SQL para ser inserido no BD e limpa codigos maliciosos
            $stmt =$pdo->prepare($sql);

            //Passa as variaveis para o SQL
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':nome_social', $dados['nome_social'], PDO::PARAM_STR);
            $stmt->bindParam(':genero', $dados['genero'], PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
            $stmt->bindParam(':rg', $dados['rg'], PDO::PARAM_STR);
            $stmt->bindParam(':data_nascimento', $dados['data_nascimento']); 
            $stmt->bindParam(':celular', $dados['celular'], PDO::PARAM_STR);
            $stmt->bindParam(':rua', $dados['rua'], PDO::PARAM_STR);
            $stmt->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
            $stmt->bindParam(':complemento', $dados['complemento'], PDO::PARAM_STR);
            $stmt->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);
            $stmt->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
            $stmt->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
            $stmt->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $stmt->bindParam(':nivel_acesso', $dados['nivel_acesso'], PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha_criptografada);

            

            
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