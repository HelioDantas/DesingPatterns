<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 16:47
 */

namespace App\Model;


abstract class  CarroFactory
{

    protected  $nome;
    /**@return \App\Model\Roda
     *
     **/
    public abstract function montarRoda();

    /**@return \App\Model\Som
     *
     **/
    public abstract function montarSom();

    /**
     * @param mixed $nome
     */
    public abstract function setNome();


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
}