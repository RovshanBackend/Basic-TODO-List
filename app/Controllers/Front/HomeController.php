<?php

namespace App\Controllers\Front;
use App\Core\BaseController;
use App\Core\Database;
use Exception;

class HomeController extends BaseController
{
    public function index()
    {

        $title = 'Home Page';
        $content = 'Welcome to the home page!';
        $this->render("front/home", ['title' => $title, 'content' => $content]);
    }
}