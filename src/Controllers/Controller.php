<?php

namespace App\Controllers;

use Slim\Http\Response;
use Slim\Http\Request;
use Slim\Container;
use Slim\Views\PhpRenderer;

class Controller
{
    protected $container;
    protected $view;
    protected $data;

    public function __construct(Container $container) {
        $this->view = $container->get('renderer');
        $this->container = $container;

    }
}