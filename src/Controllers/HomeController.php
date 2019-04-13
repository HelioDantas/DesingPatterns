<?php

namespace App\Controllers;

use App\Model\Empresa;
use App\Model\Endereco;
use App\Model\FactoryMethod;


class HomeController extends Controller
{

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
        $personagemParametro = isset($paran['personagem']) ? $paran['personagem']: '';
        $factoy = new FactoryMethod();
        $personagem = $factoy->escolherPersonagem($personagemParametro);

        return $this->view->render($response, 'factoryMethod.php', compact('personagem'));
    }

    public function mortalKombat($request, $response, $args) {

        return $this->view->render($response, 'factoryMethod.php');
    }
}