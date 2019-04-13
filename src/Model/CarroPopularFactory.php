<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 16:55
 */

namespace App\Model;


class CarroPopularFactory  extends CarroFactory
{

     protected $nome =  'popular';
    /**@return \App\Model\Roda
     *
     **/
    public function montarRoda()
    {
        return new RodaSimples();
    }

    /**@return \App\Model\Som
     *
     **/
    public function montarSom()
    {
        return new CdPlay();
    }

    public function setNome()
    {
        $this->nome =  'popular';
    }
}