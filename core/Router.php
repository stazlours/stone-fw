<?php
// core/Router.php
namespace StoneFw;

class Router
{
    protected array $routes = [];

    public function get(string $uri, callable $callback)
    {
        $this->routes['GET'][$uri] = $callback;
    }

    public function dispatch(): Response
    {
        $request = new Request();
        $method = $request->getMethod();
        $uri = $request->getUri();

        if (isset($this->routes[$method][$uri])) {
            $callback = $this->routes[$method][$uri];
            $content = call_user_func($callback);
            return new Response($content);
        }

        return new Response('404 Not Found', 404);
    }
}
