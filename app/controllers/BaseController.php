<?php
namespace App\Controllers;

class BaseController
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }
}
