<?php
// public/index.php

// 1. Activer l'autoload Composer
require_once __DIR__ . '/../vendor/autoload.php';

// 2. Importer le namespace principal
use StoneFw\Application;

// 3. Créer l'application
$app = new Application();



// Déclarer une route
$app->router->get('/', function() {
    return 'Bienvenue sur StoneFw !';
});

// 4. Lancer l'application (gestion de la requête / réponse)
$app->run();
