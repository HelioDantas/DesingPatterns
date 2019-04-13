<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 10:31
 */

namespace App\Model;


use App\Inteface\Ipersonagem;

class LiuKang implements Ipersonagem
{


    public function escolhido()
    {
        return 'LiuKang';
    }
}