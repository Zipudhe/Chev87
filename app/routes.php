<?php

$route[] = ['/','HomeController@index'];
$route[] = ['/posts','PostsController@index'];
$route[] = ['/post/{id}/show','PostsController@index'];

return $route;
