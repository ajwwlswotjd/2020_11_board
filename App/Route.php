<?php

namespace Gondr;

class Route {

    public static $GET = [];
    public static $POST = [];

    public static function post( $url , $action )
    {
        self::$POST[] = [$url,$action];
    }

    public static function get( $url , $action )
    {
        self::$GET[] = [$url, $action];
    }

    public static function route($link)
    {
        foreach( self::${$_SERVER['REQUEST_METHOD']} as $req )
        {
            if( $req[0] === $link ){
                $actions = explode("@" , $req[1]);
                $cName = "\\Gondr\\Controller\\" . $actions[0];
                $cInstance = new $cName();
                $cInstance->{$actions[1]}();
                return;
            }
        }
        echo "404 not found";
        var_dump($_SERVER['REQUEST_URI']);
        exit;
    }

}