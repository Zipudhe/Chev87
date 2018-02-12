<?php

namespace App\Controllers;

class PostsController{
  public function index(){
    echo "Posts";
  }

  public function show($id){
    var_dump($id);
    echo $id;
  }
}
 ?>
