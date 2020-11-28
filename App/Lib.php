<?php

namespace Gondr;

class Route
{
    public static function move( $link , $msg = null )
    {
        echo "<script>";
        if($msg) echo "alert('$msg');";
        echo "location.href = '$link';";
        echo "</script>";
    }

    public static function back( $msg = null )
    {
        echo "<script>";
        if($msg) echo "alert('$msg');";
        echo "history.back();";
        echo "</script>";
    }

    public static function user()
    {
        return __SIGN ? $_SESSION['user'] : null;
    }
}