<?php

// $this 는 new class 선언한 instance 대상
// self 는 class 대상
class Router 
{
    static $routes = [];
    static function path($method, $uri, $handler) 
    {
        self::$routes[] = [$method,$uri, $handler];
    }

    static function handleRequest() 
    {
        
        $REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
        $REQUEST_URI = explode("?",$_SERVER['REQUEST_URI'])[0];
        
        foreach (self::$routes as $route) 
        {
            [$method, $uri, $handler] = $route;

            if($REQUEST_METHOD !== $method) continue;
            if($REQUEST_URI === $uri){
                return $handler();
            }
        }

        echo "URI : " .$REQUEST_URI . " 404 Not Found";
    }
}


function GET($uri,$handler){
    Router::path('GET',$uri,$handler);
}
function POST($uri,$handler){
    Router::path('POST',$uri,$handler);
}