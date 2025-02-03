<?php


namespace App;

class Router
{
     private $routes = [
         '/' => "ProductController@index",
         '/user' => "UserController@index",
         '/register-form' => "UserController@showForm",
         '/register' => "UserController@register",
         '/product' => "ProductController@productDetails"
     ];

     public function dispatch($requestUri)
     {
         $segments = explode('/', $requestUri);
         if(isset($segments[2])) {
             $param = $segments[2];
             $requestUri = '/' . $segments[1];
         } else {
              $requestUri = urldecode($requestUri);
         }

          if (!array_key_exists($requestUri, $this->routes)) {
               echo "Page introuvable";
               return;
          }
          $controllerAction = explode('@', $this->routes[$requestUri]);
          $controllerName = $controllerAction[0];
          $controllerFunctionName = $controllerAction[1];
          if (!file_exists(__DIR__ . '/' . $controllerName . '.php')) {
               echo "Le fichier n'existe pas";
               return;
          }
          $pathController = 'App\\' . $controllerName;
          if (!class_exists($pathController)) {
               echo "La class n'existe pas";
               return;
          }
          $controller = new $pathController();
          if (!method_exists($controller, $controllerFunctionName)) {
               echo "La méthode n'existe pas";
               return;
          }

          if(isset($param)) {
              return $controller->{$controllerFunctionName}($param);
          } else {
              return $controller->{$controllerFunctionName}();
          }
     }
}