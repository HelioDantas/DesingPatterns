<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 10:34
 */

namespace App\Model;


use App\Inteface\Ipersonagem;

class SubZero implements  Ipersonagem
{

        public function escolhido()
        {
            return 'SubZero';
        }
}