<?php

namespace App;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{
     public function render($name, $arrayAssoc = null)
     {
          $loader = new FilesystemLoader('./views/');
          $twig = new Environment($loader);
          return $twig->render($name, $arrayAssoc);
     }
}