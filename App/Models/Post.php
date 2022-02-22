<?php


namespace App\Models;

use PDO;    

class Post extends \Core\Model{

    public static function getAll(){
        try{
            $db = static::getDB();
            //query

        }catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}




