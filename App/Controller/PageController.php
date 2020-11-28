<?php

namespace Gondr\Controller;

class PageController extends MasterController {

    public function main()
    {
        $this->render("main");
    }

    public function board()
    {
        $this->render("board");
    }

    public function write()
    {
        $this->render("form");
    }

    public function mod()
    {
        $this->render("mod");
    }

    public function view()
    {
        $this->render("view");
    }

    public function register()
    {
        $this->render("join");
    }

    public function login()
    {
        $this->render("login");
    }
}