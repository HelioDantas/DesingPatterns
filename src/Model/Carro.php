<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 17:51
 */

namespace App\Model;


class Carro
{
    private $roda;
    private $som;
    private $nome;

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getSom()
    {
        return $this->som;
    }

    /**
     * @param mixed $som
     */
    public function setSom(Som $som)
    {
        $this->som = $som;
    }

    /**
     * @return mixed
     */
    public function getRoda()
    {
        return $this->roda;
    }

    /**
     * @param mixed $roda
     */
    public function setRoda(Roda $roda)
    {
        $this->roda = $roda;
    }

}