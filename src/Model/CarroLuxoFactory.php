<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 16:59
 */

namespace App\Model;


class CarroLuxoFactory extends CarroFactory
{
     protected $nome  = 'luxo';
    /**@return \App\Model\Roda
     *
     **/
    public function montarRoda()
    {
        return new RodaDeLigaLeve();
    }

    /**@return \App\Model\Som
     *
     **/
    public function montarSom()
    {
        return new Bluetooh();
    }
    public function setNome()
    {
        $this->nome  = 'luxo';
    }
}