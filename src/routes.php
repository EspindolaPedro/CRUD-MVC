<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo','UsuariosController@add'); //rota de novo usuário direcionando para a rota add
$router->post('/novo', 'UsuariosController@addAction'); //addAction vai ser o recebimento das informações
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

$router->get('/usuario/{id}/excluir', 'UsuariosController@del');
