<?php

namespace App\Controllers;
//importa o Model de Usuario
use App\Models\Usuario;

class UsuarioController{
    //Busca os usuarios e chama a tela de listar
    public function listar(){
        //Chama a model e a função que busca os dados e armazena na var
        $lista_usuarios = Usuario::buscarTodos();

        render("usuarios/lista_usuarios.php",[
            'title' => "Lista de Usuarios",
            'usuarios' => $lista_usuarios
        ]);

    }
}