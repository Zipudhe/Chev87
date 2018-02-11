<?php

$route[] = ['/','HomeController@index'];
$route[] = ['/posts','PostsController@index'];
$route[] = ['/post/{id}/show','PostController@show'];

return $route;
