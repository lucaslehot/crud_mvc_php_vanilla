<?php
class Routes {
    private $routes = array();
    private $routesName = array();
    private $routesPath = array();
    private $routesController = array();
    private $routesAction = array();
    private $idRoutes = 0;
    private $routeIndexName;
    private $routeIndexPath;
    private $routeIndexController;
    private $routeIndexAction;
    private $error404 = false;

    public function initRoute($routeName, $urlPath, $controller, $action) {
        $this->routesName[$routeName] = $this->idRoutes;
        $this->routesPath[$urlPath] = $this->idRoutes;
        $this->routesController[$controller] = $this->idRoutes;
        $this->routesAction[$action] = $this->idRoutes;

        $this->routes[$this->idRoutes] = array("name" => $routeName, "path" => $urlPath, "controller" => $controller, "action" => $action);

        $this->idRoutes++;
    }

    public function urlFor($routeName) {
        if (array_key_exists($routeName, $this->routesName)) {
            return "/" . $this->routes[$this->routesName[$routeName]]["path"];
        } elseif ($routeName == $this->routeIndexName) { 
            return "/" . $this->routeIndexPath;
        } else {
            return "";
        }
    }

    public function getController($urlPath) {
        if (array_key_exists($urlPath, $this->routesPath)) {
            return array($this->routes[$this->routesPath[$urlPath]]["controller"], $this->routes[$this->routesPath[$urlPath]]["action"]);
        } elseif ($urlPath == null || $urlPath == "" || $urlPath == $this->routeIndexName) {
            return array($this->routeIndexController, $this->routeIndexAction);
        } else {
            return $this->error404 = true;
        }
    }

    public function initIndexRoute($routeName, $urlPath, $template) {
        $this->routeIndexName = $routeName;
        $this->routeIndexPath = $urlPath;
        $this->routeIndexController = $template;
        $this->routeIndexAction = 'index';
    }

    public function isError404() {
        if ($this->error404 == true) {
            return true;
        }
        return false;
    }

}