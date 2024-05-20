<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller { //aqui temos controle das rotas, renderizamos as páginas criada na view e podemos enviar váriáveis do banco de dados

    public function add() {
       $this->render('add');
    }
    public function addAction() {
        $name = filter_input(INPUT_POST, 'name'); //recebemos o input da ação do formulário pelo nome e email.
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email) {
            $data = Usuario::select()->where('email')->execute(); //Seleciona a tabela email
            if(count($data) === 0) { //se não houver nenhum úsuario com o mesmo email
                Usuario::insert([ // será inserido na tabela
                    'nome'=>$name,
                    'email'=>$email
                ])->execute();
                    //redirect para 
                  $this->redirect('/');
            }
            
        }
       $this->redirect('/novo');
    }

    public function edit($args){
        $usuario = Usuario::select()->find($args['id']);

        if ($usuario) {
            $this->render('edit', [
                'usuario' => $usuario
            ]);
        } else {
            $this->redirect('/');
        }
    }

    public function editAction($args){
        $name = filter_input(INPUT_POST, 'name'); //recebemos o input da ação do formulário pelo nome e email.
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email){
            Usuario::update()->set('nome',$name)->set('email',$email)->where('id', $args['id'])->execute();

                $this->redirect('/');              
        }
        $this->redirect('/usuario/'.$args['id'].'/editar');
    }
    
    public function del($args){
        Usuario::delete()->where('id', $args['id'])->execute();

        $this->redirect('/');
    }
 
}