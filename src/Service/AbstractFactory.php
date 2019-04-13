<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 17:36
 */

namespace App\Service;

use App\Model\Carro;
use App\Model\CarroLuxoFactory;
use App\Model\CarroPopularFactory;

class AbstractFactory
{
    private $carroFactory = null;

    public function montarCarro($tipo) {

        switch ($tipo)
        {
            case 'luxo'   : $this->carroFactory = new CarroLuxoFactory();break;
            case 'popular': $this->carroFactory = new CarroPopularFactory();break;
            default       : $this->carroFactory = new CarroPopularFactory();break;
        }

        $carro = new Carro();
        $carro->setNome($this->carroFactory->getNome());
        $carro->setRoda($this->carroFactory->montarRoda());
        $carro->setSom($this->carroFactory->montarSom());

        return $carro;
    }

}