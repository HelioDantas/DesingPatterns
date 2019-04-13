<?php
/**
 * Created by PhpStorm.
 * User: helio.dantas
 * Date: 12/04/2019
 * Time: 22:27
 */

namespace App\Model;


final class  Singleton
{
    private static $intancia = null;
 /**
 * @return null
 */public static function getIntancia() {
     if (self::intancia == null) {
         return new Singleton();
     }
     return self::$intancia;
   }

   public static function messagem ($menssagem) {

     echo $menssagem;
   }
}