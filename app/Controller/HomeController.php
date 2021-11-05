<?php

namespace App\Php\Mvc\Controller;

use App\Php\Mvc\App\View;

class HomeController
{
    public function index()
    {
        View::render("home", [
            "title" => "Hallo"
        ]);
    }

}