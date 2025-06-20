<?php

namespace App\Controllers\Front;
use App\Core\BaseController;

class ExampleController extends BaseController
{
    public function index()
    {
        $title = 'Example Page';
        $content = 'This is an example page content.';
        $this->render("front/example", ['title' => $title, 'content' => $content]);
    }
}