<?php

namespace Core;

class Router
{

    protected $routes = array();

    public function __construct()
    {
        $this->routes = parse_ini_file("config/routes.conf");
    }

    public function route()
    {
        
        foreach ($this->routes as $route) {
            if ($_SERVER['REQUEST_URI'] == '/' . APPNAME . '/') { // Default
                $matchedRoute = $this->routes['default'];
                break;
            } elseif ($_SERVER['REQUEST_URI'] == '/' . APPNAME . '/' . $route['uri']) {
                $matchedRoute = $route;
                break;
            } else { // 404
                $matchedRoute = $this->routes['error_404'];
            }
        }

        $this->routeToControllerFunction($matchedRoute);
    }

    public function redirectTo($routeName)
    {
        $route = $this->routes[$routeName];
        $this->routeToControllerFunction($route);
    }

    protected function routeToControllerFunction($route)
    {
        $className = strval($route['controller']);
        $controller = new $className();
        $function = $route['function'];
        $controller->$function();
    }
}
