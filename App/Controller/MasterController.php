<?php

namespace Gondr\Controller;

class MasterController {
    public function render( $page , $data = [] )
    {
        extract($data);
        require __ROOT . "/views/layout/header.php";
        require __ROOT . "/views/" .$page .  ".php";
        require __ROOT . "/views/layout/footer.php";
    }
}