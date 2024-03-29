<?php

namespace Gondr;

class DB 
{

    public static $con = null;

    public static function getDB()
    {
        if(self::$con == null) self::$con = new \PDO("mysql:host=localhost;dbname=notice;charset=utf8mb4;" , "root");
        return self::$con;
    }

    public static function query( $sql , $param = [] )
    {   
        $con = self::getDB();
        $q = $con->prepare($sql);
        $cnt = $q->execute($param);
        return $cnt;
    }

    public static function fetch( $sql , $param = [] ) 
    {
        $con = self::getDB();
        $q = $con->prepare($sql);
        $q->execute($param);
        return $q->fetch(\PDO::FETCH_OBJ);
    }

    public static function fetchAll( $sql , $param = [] ) 
    {
        $con = self::getDB();
        $q = $con->prepare($sql);
        $q->execute($param);
        return $q->fetchAll(\PDO::FETCH_OBJ);
    }

}