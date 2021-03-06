<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 13/04/2019
 * Time: 10:37
 */

namespace App\Service;

use App\Model\LiuKang;
use App\Model\SubZero;
use App\Model\Scorpin;
use App\Model\ErroPersonagem;


class FactoryMethod
{

    public function escolherPersonagem($personagem) {

        switch ($personagem)
        {

            case 'LiuKang': return new LiuKang();
            case 'SubZero': return new SubZero();
            case 'Scorpin': return new Scorpin();
            default       : return new ErroPersonagem();

        }

    }


}