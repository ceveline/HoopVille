<?php
namespace app\core;

<<<<<<< HEAD
class App
{
    private $routes = [];

    public function addRoute($url, $handler)
    {
<<<<<<< HEAD
=======
class App {
    private $routes = [];

    public function addRoute($url,$handler){
>>>>>>> parent of ed149ba (merged)
=======
>>>>>>> DenisBranch
>>>>>>> parent of d2543ad (merged)
        $url = preg_replace('/{([^\/]+)}/', '(?<$1>[^\/]+)', $url);
        $this->routes[$url] = $handler;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> parent of d2543ad (merged)
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
<<<<<<< HEAD
=======
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
>>>>>>> parent of ed149ba (merged)
=======
>>>>>>> DenisBranch
>>>>>>> parent of d2543ad (merged)

                return [$controllerMethod, $namedParams];
            }
        }
        return false;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    function filtered($controllerInstance, $method)
    {
=======
    function filtered($controllerInstance, $method){
>>>>>>> parent of ed149ba (merged)
=======
    function filtered($controllerInstance, $method){
=======
    function filtered($controllerInstance, $method)
    {
>>>>>>> DenisBranch
>>>>>>> parent of d2543ad (merged)

        //create an object that can get information about the controller
        $reflection = new \ReflectionClass($controllerInstance);
        //get the attributes from the controller
        $classAttributes = $reflection->getAttributes();
        $methodAttributes = $reflection->getMethod($method)->getAttributes();

<<<<<<< HEAD
<<<<<<< HEAD
        $attributes = array_merge($classAttributes, $methodAttributes);
=======
        $attributes = array_merge($classAttributes,$methodAttributes);
>>>>>>> parent of ed149ba (merged)
=======
        $attributes = array_merge($classAttributes,$methodAttributes);
=======
        $attributes = array_merge($classAttributes, $methodAttributes);
>>>>>>> DenisBranch
>>>>>>> parent of d2543ad (merged)

        foreach ($attributes as $attribute) {
            //instantiate the filter
            $filter = $attribute->newInstance();
            //run the filter and test if redirected
<<<<<<< HEAD
<<<<<<< HEAD
            if ($filter->redirected()) {
=======
            if($filter->redirected()){
>>>>>>> parent of ed149ba (merged)
=======
            if($filter->redirected()){
=======
            if ($filter->redirected()) {
>>>>>>> DenisBranch
>>>>>>> parent of d2543ad (merged)
                return true;
            }
        }
        return false;
    }


<<<<<<< HEAD
<<<<<<< HEAD
    function __construct()
    {
        //call the appropriate controller class and method to handle the HTTP Request
=======
    function __construct(){
    	//call the appropriate controller class and method to handle the HTTP Request
>>>>>>> parent of ed149ba (merged)
=======
    function __construct(){
    	//call the appropriate controller class and method to handle the HTTP Request
=======
    function __construct()
    {
        //call the appropriate controller class and method to handle the HTTP Request
>>>>>>> DenisBranch
>>>>>>> parent of d2543ad (merged)
        //Routing version 1.0

        $url = $_GET['url'];

<<<<<<< HEAD
<<<<<<< HEAD
=======
        include('app/routes.php');

        [$controllerMethod, $namedParams] = $this->resolve($url);

        if(!$controllerMethod){ return;  }

        [$controller,$method] = explode(',', $controllerMethod);
=======
>>>>>>> parent of d2543ad (merged)
        include ('app/routes.php');

        [$controllerMethod, $namedParams] = $this->resolve($url);

        if (!$controllerMethod) {
            return;
        }

        [$controller, $method] = explode(',', $controllerMethod);
<<<<<<< HEAD
=======
        include('app/routes.php');

        [$controllerMethod, $namedParams] = $this->resolve($url);

        if(!$controllerMethod){ return;  }

        [$controller,$method] = explode(',', $controllerMethod);
>>>>>>> parent of ed149ba (merged)
=======
>>>>>>> DenisBranch
>>>>>>> parent of d2543ad (merged)

        $controller = '\app\controllers\\' . $controller;
        $controllerInstance = new $controller();

<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->filtered($controllerInstance, $method)) {
=======
        if($this->filtered($controllerInstance, $method)){
>>>>>>> parent of ed149ba (merged)
=======
        if($this->filtered($controllerInstance, $method)){
=======
        if ($this->filtered($controllerInstance, $method)) {
>>>>>>> DenisBranch
>>>>>>> parent of d2543ad (merged)
            return;
        }

        call_user_func_array([$controllerInstance, $method], $namedParams);

    }
}