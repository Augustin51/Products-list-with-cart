<?php
spl_autoload_register(function ($class) {
     $prefix = 'App\\';
     
     $baseDir = __DIR__ . '/src/';

// Vérifier si la classe appartient au namespace App
     if (strncmp($prefix, $class, strlen($prefix)) !== 0) {
          return;
     }

// Extraire la partie relative de la classe
     $relativeClass = substr($class, strlen($prefix));

// Générer le chemin du fichier correspondant
     $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

// Charger le fichier si existant
     if (file_exists($file)) {
          require $file;
     }
     
});