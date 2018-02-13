<?php

  namespace App\Controllers;

  class PostsController{

    public function index(){
      echo "Post";
    }
    public function show($id, $request){
      echo $id;

    }
  }
 ?>
