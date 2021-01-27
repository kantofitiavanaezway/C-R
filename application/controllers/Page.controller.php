<?php
include_once CONFIG . 'Controller.php';
class Page extends Controller
{
    function __construct()
    {
    }
    public function index()
    {
        include_once VIEWS_FRONT . 'home.php';
    }
}