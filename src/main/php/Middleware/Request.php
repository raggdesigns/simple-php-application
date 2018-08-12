<?php

namespace lmarqs\Spa\Middleware;

class Request
{

    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';

    private $atributes = [];

    public function setAttribute($key, $value)
    {
        return $this->$atributes[$key] = $value;
    }

    public function getAttribute($key)
    {
        return $this->$atributes[$key];
    }

    public function params()
    {
        return is_array($_POST) ? $_POST : [];
    }

    public function query()
    {
        return is_array($_GET) ? $_GET : [];
    }

    public function path()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}