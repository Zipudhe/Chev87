<?php

namespace Core;

class Route {

  private $routes;

  public function __construct(array $routes){
    $this->setRoutes($routes);
    $this->run();
  }

  private function setRoutes($routes){
    foreach ($routes as $route) {
      $explode  = explode('@', $route[1]);
      $rota = [$route[0], $explode[0], $explode[1]];
      $newroutes[] = $rota;
    }
    $this->routes = $newroutes;
  }

  private function getUrl(){
      return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }

  private function run(){
    $url =  $this->getUrl();
    $urlArray = explode('/', $url);
    foreach ($this->routes as $route){
        $routeArray = explode('/', $route[0]);
        $parametro = [];
        for($i = 0; $i < count($routeArray); $i++){
            if((strpos($routeArray[$i], "{") !== false) && (count($urlArray) == count($routeArray))){
              $routeArray[$i] = $urlArray[$i];
              $parametro[] = $urlArray[$i];
            }
          $route[0] = implode($routeArray, '/');
        }
      if($url == $route[0]){
        $found = true;
        $controller = $route[1];
        $action = $route[2];
        break;
      }
    }
      // echo $found;
    // echo $url . "<br>";
    // echo $route[0];
    if($found){
      // echo $controller;
      $controller = Container::newController($controller);
      switch(count($parametro)){
        case 1:
            $controller->$action($parametro[0]);
            break;
        case 2:
            $controller->$action($parametro[0], $parametro[1]);
            break;
        case 3:
            $controller->$action($parametro[0], $parametro[1], $parametro[2]);
            break;
        default:
            $controller->$action();
            break;
      }
    }
    // else{
    //   Container::pageNotFound();
    // }
  }
}

 ?>
