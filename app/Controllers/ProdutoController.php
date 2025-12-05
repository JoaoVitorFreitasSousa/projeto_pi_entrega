<?php

namespace App\Controllers;
//importa o Model de Usuario
use App\Models\Produto;
use EmptyIterator;

class ProdutoController{
    //Busca os usuarios e chama a tela de listar
    public function listar(){
        //Chama a model e a função que busca os dados e armazena na var
        $lista_produtos = Produto::buscarTodos();

        render("produtos/lista_produtos.php",[
            'title' => "Lista de Produtos",
            'produtos' => $lista_produtos
        ]);

    }

    public function salvar(){
        //1. Limpa os dados, remove tudo que nao for texto puro
        $dados =[
            'titulo' => filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS),
            'autor' => filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_SPECIAL_CHARS),
            'preco' => filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_SPECIAL_CHARS),
            'descricao' => filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS),
            

        ];

        //cria a lista de erros
        $erros= [];

        if(empty($dados['titulo'])){
            $erros[] = 'O campo Titulo não pode ficar em branco';
        }else if(strlen($dados['titulo']) < 4){ //Verifica se o nome tem menos de 4 letras
            $erros[] = 'O campo Titulo deve ter mais que 3 caracteres';
        }

        //Se nao houver erros salva
        if (empty($erros)){
            $id = Produto::salvar($dados);
            header('Location: /produtos');
        }else{
            //Se houver erros, volta para o formulario
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            header('Location: /produtos/inserir');
            
        }



    }

}
      