<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 11/04/2019
 * Time: 16:46
 */

namespace App\Model;

use App\Inteface\ObjectEnd;

class Empresa
{
    private $nome;
    private $cnpj;
    private $endereco;


    /**
     * @return mixed
     */

    public function __construct(ObjectEnd $endereco = null){

        $this->endereco = $endereco;


    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }


}