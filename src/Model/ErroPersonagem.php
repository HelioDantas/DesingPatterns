<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 11:45
 */

namespace App\Model;


use App\Inteface\Ipersonagem;

class ErroPersonagem implements Ipersonagem
{

    public function escolhido()
    {
        return 'erro';
    }
}