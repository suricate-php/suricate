<?php
namespace App\Controllers;

class BaseController
{
    protected $response;
    protected $route;

    public function __construct($response, $route)
    {
        $this->response = $response;
        $this->route    = $route;
    }
}
