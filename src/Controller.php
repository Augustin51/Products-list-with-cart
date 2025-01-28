<?php

namespace App;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{
     public function renderTwig($name, $arrayAssoc = null)
     {
          $loader = new FilesystemLoader('./views/');
          $twig = new Environment($loader);
          return $twig->render($name, $arrayAssoc);
     }

     public function renderPHP($name, $data = null) {
         extract($data);
         require 'views/' . $name;
     }
}