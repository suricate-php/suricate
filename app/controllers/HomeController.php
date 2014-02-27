<?php
namespace App\Controllers;


class HomeController extends BaseController
{
    public function getHomepage()
    {
        $view = new View\Weather\Country($model);
        $this->response->setBody($view->render());
    }
}
