<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;
use App\Controllers\ProdutoController;



function render($view, $data = []) {
    extract($data);
    ob_start();
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();
    require __DIR__ . '/../app/Views/layouts/base.php';
}

function render_sem_template($view, $data = []) {
    extract($data);
    require __DIR__ . '/../app/Views/' . $view;
}


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


if ($url == "/" || $url == "/index.php") {

    render_sem_template('home.php', [
        'title' => 'Bem vindo!',
        'lenda'  => 'Agora eu sou uma lenda do PHP!'
    ]);

}

else if ($url == "/sobre") {

    render('sobre.php', ['title' => 'Sobre a Página!']);

}



else if ($url == "/usuarios") {

    $controller = new UsuarioController();
    $controller->listar();

} else if ($url == "/usuarios/inserir") {

    render('usuarios/form_usuarios.php', ['title' => 'Cadastrar Usuario']);

} else if ($url == "/usuarios/salvar" && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $controller = new UsuarioController();
    $controller->salvar();

}


else if ($url == "/produtos") {

    $controller = new ProdutoController();
    $controller->listar();

} else if ($url == "/produtos/inserir") {

    render('produtos/form_produtos.php', ['title' => 'Cadastrar Produtos']);

} else if ($url == "/produtos/salvar" && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $controller = new ProdutoController();
    $controller->salvar();
}

?>
