<?php
namespace App\Views;

class BaseView extends \Suricate\Page
{
    protected $model;

    public function __construct(&$model = null)
    {
        parent::__construct();
        
        $this->model = $model;
        $this->setLanguage('fr_FR');
        $this->setTitle('');

    }
}
