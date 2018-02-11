<?php

namespace Core;

class Route {

  private $routes;

  public function __construct(array $routes){
    $this->routes = $routes;
    $this->run();
  }

  private function getUrl(){
      return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }

  private function run(){
    $url =  $this->getUrl();
    $urlArray = explode('/', $url);
    print_r($urlArray);
    foreach ($this->routes as $route){
        $routeArray = explode('/', $route[0]);
        echo '<br>';
        print_r($routeArray);
      for($i = 0; $i < count($routeArray); $i++){
          if((strpos($routeArray[$i], "{") !== false) && (count($urlArray) == count($routeArray))){
            $routeArray[$i] = $urlArray[$i];
          }
          $route[0] = implode($routeArray, '/ ');
      }
      if($ulr == $rote[0]){
        echo "Rota Valida";
      }
      else {
        echo "Rota invalida";
      }
    }
  }
}

 ?>
