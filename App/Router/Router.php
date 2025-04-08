<?php

class Router
{
    private $routes = [];

    public function add(string $route, array $handler)
    {
        $this->routes[$route] = $handler;
    }

    public function dispatch(string $url)
    {
        foreach ($this->routes as $route => $handler) {

            // Substitui {param} por regex padrão
            $pattern = preg_replace('#\{[a-zA-Z_]+\}#', '([a-zA-Z0-9_-]+)', $route);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches); // Remove o match completo
                return call_user_func_array($handler, $matches);
            }
        }

        // Se não encontrar rota
        http_response_code(404);
        echo "Erro 404 - Página não encontrada";
    }
}
