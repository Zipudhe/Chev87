<?php

  namespace App\Controllers;

  class HomeController{

    private $view;

    public function __construct(){
      $this->view = new stdClass;
    }

    public function index(){
      $this->view->nome = "Lucas";
      require_once __DIR__ . "/../Views/home/index.phtml";
    }
  }

 ?>
