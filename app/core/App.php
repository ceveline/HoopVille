<?php
namespace app\core;

<<<<<<< HEAD
class App {
    private $routes = [];

    public function addRoute($url,$handler){
=======
class App
{
    private $routes = [];

    public function addRoute($url, $handler)
    {
>>>>>>> DenisBranch
        $url = preg_replace('/{([^\/]+)}/', '(?<$1>[^\/]+)', $url);
        $this->routes[$url] = $handler;
    }

<<<<<<< HEAD
    public function resolve($url){
        $matches = [];
        //one by one compare the url to resolve the route
        foreach ($this->routes as $routePattern => $controllerMethod) {
            if(preg_match("#^$routePattern$#", $url, $matches)){//match the route

                // Filter named parameters
                $namedParams = array_filter($matches,
                    function($key) {
                        return !is_numeric($key);
                    }
                    , ARRAY_FILTER_USE_KEY);
=======
    public function resolve($url)
    {
        $matches = [];
        //one by one compare the url to resolve the route
        foreach ($this->routes as $routePattern => $controllerMethod) {
            if (preg_match("#^$routePattern$#", $url, $matches)) {//match the route

                // Filter named parameters
                $namedParams = array_filter(
                    $matches,
                    function ($key) {
                        return !is_numeric($key);
                    }
                    ,
                    ARRAY_FILTER_USE_KEY
                );
>>>>>>> DenisBranch

                return [$controllerMethod, $namedParams];
            }
        }
        return false;
    }

<<<<<<< HEAD
    function filtered($controllerInstance, $method){
=======
    function filtered($controllerInstance, $method)
    {
>>>>>>> DenisBranch

        //create an object that can get information about the controller
        $reflection = new \ReflectionClass($controllerInstance);
        //get the attributes from the controller
        $classAttributes = $reflection->getAttributes();
        $methodAttributes = $reflection->getMethod($method)->getAttributes();

<<<<<<< HEAD
        $attributes = array_merge($classAttributes,$methodAttributes);
=======
        $attributes = array_merge($classAttributes, $methodAttributes);
>>>>>>> DenisBranch

        foreach ($attributes as $attribute) {
            //instantiate the filter
            $filter = $attribute->newInstance();
            //run the filter and test if redirected
<<<<<<< HEAD
            if($filter->redirected()){
=======
            if ($filter->redirected()) {
>>>>>>> DenisBranch
                return true;
            }
        }
        return false;
    }


<<<<<<< HEAD
    function __construct(){
    	//call the appropriate controller class and method to handle the HTTP Request
=======
    function __construct()
    {
        //call the appropriate controller class and method to handle the HTTP Request
>>>>>>> DenisBranch
        //Routing version 1.0

        $url = $_GET['url'];

<<<<<<< HEAD
        include('app/routes.php');

        [$controllerMethod, $namedParams] = $this->resolve($url);

        if(!$controllerMethod){ return;  }

        [$controller,$method] = explode(',', $controllerMethod);
=======
        include ('app/routes.php');

        [$controllerMethod, $namedParams] = $this->resolve($url);

        if (!$controllerMethod) {
            return;
        }

        [$controller, $method] = explode(',', $controllerMethod);
>>>>>>> DenisBranch

        $controller = '\app\controllers\\' . $controller;
        $controllerInstance = new $controller();

<<<<<<< HEAD
        if($this->filtered($controllerInstance, $method)){
=======
        if ($this->filtered($controllerInstance, $method)) {
>>>>>>> DenisBranch
            return;
        }

        call_user_func_array([$controllerInstance, $method], $namedParams);

    }
}