<?php

  namespace App\Controllers;

  use Core\BaseController;

  class PostsController extends BaseController{

    public function index(){
      echo "Post";
    }

    public function show($id){
      echo $id;
    }
  }
 ?>
