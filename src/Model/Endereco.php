<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 11/04/2019
 * Time: 16:41
 */
namespace App\Model;

use App\Inteface\ObjectEnd;


class Endereco implements  ObjectEnd
{
    private $cep;
    public $rua;

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @param mixed $rua
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
    }
}