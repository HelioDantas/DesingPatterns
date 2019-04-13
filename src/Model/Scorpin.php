<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 10:33
 */

namespace App\Model;


use App\Inteface\Ipersonagem;

class Scorpin implements Ipersonagem
{

    public function escolhido()
    {
        return 'Scorpin';
    }
}