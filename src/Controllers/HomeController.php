<?php

namespace App\Controllers;

use App\Model\Empresa;
use App\Model\Endereco;
use App\Service\HomeService;
use Slim\Container;


class HomeController extends Controller
{
  private  $factoryMethodService;

    public function __construct(Container $container)
    {
        $this->factoryMethodService = new HomeService();
        parent::__construct($container);
    }

    public function home ($request, $response, $args) {


       return $this->view->render($response, 'index.php');
    }



    public function injectotPorDependeciaPorConstructor($request, $response, $args) {

        $endereco = new Endereco();
        $endereco->setRua('marcos');
        $endereco->setCep('21210');
        $empresa  = new Empresa($endereco);

        return $this->view->render($response, 'injecaoDeDepedenca.php', compact('empresa'));
    }

    public function injectotPorDependeciaPorGet($request, $response, $args) {

        $endereco = new Endereco();
        $endereco->setRua('marcos');
        $endereco->setCep('21210');
        $empresa  = new Empresa($endereco);

        return $this->view->render($response, 'injecaoDeDepedenca.php', compact('empresa'));
    }

    public function singleton($request, $response, $args) {

        $endereco = new Endereco();
        $endereco->setRua('marcos');
        $endereco->setCep('21210');
        $empresa  = new Empresa($endereco);

        return $this->view->render($response, 'injecaoDeDepedenca.php', compact('empresa'));
    }

    public function factoryMethod($request, $response, $args) {

        $paran = $request->getParams();
        $personagem = $this->factoryMethodService->factoyMethod($paran);

        return $this->view->render($response, 'factoryMethod.php', compact('personagem'));
    }

    public function mortalKombat($request, $response, $args) {

        return $this->view->render($response, 'factoryMethod.php');
    }

    public  function carrosAbstractfactory($request, $response, $args) {

        return $this->view->render($response, 'abstractFactory.php');
    }

    public  function carroAbstractfactory($request, $response, $args) {

        $paran = $request->getParams();
        $carro = $this->factoryMethodService->abstractFactory($paran);

        return $this->view->render($response, 'abstractFactory.php', compact('carro'));
    }
}