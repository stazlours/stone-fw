<?php
// core/Application.php
namespace StoneFw;

class Application
{
    public $router;

    public function __construct()
    {
        $this->init();
    }

    protected function init()
    {
        // Ici tu peux initialiser le container, le router, etc.
        $this->router = new Router();
    }

    public function run()
    {
        // Gérer la requête et envoyer la réponse
        $response = $this->router->dispatch();
        $response->send();
    }
}
