<?php
namespace App\Controllers;

use App\Views;

class HomeController extends BaseController
{
    public function getHomepage()
    {
        $view = new Views\BaseView();
        $this->response->setBody($view->render());
    }
}
