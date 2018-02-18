<?php

  namespace App\Controllers;

  use Core\BaseController;

  class PostsController extends BaseController{

    public function index(){
      $this->setPageTitle('posts');
      $this->renderView('/posts','posts');
    }

    public function show($id){
      echo $id . "<br>";
      echo $request->get->nome . "<br>";
      echo $request->get->sexo . "<br>";
    }
  }
 ?>
