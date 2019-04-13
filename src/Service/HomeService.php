<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 17:18
 */

namespace App\Service;


use App\Service\FactoryMethod;

class HomeService
{

    public function factoyMethod($paran) {

        $personagemParametro = isset($paran['personagem']) ? $paran['personagem'] : '';
        $factoy              = new FactoryMethod();

        return $factoy->escolherPersonagem($personagemParametro);
    }

    public function abstractFactory($paran) {

        $carroParametro = isset($paran['carro']) ? $paran['carro'] : '';
        $factoryAbs        = new AbstractFactory();

        return  $factoryAbs->montarCarro($carroParametro);
    }
}