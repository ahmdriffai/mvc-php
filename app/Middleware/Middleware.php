<?php

namespace App\Php\Mvc\Middleware;

interface Middleware
{
    function before():void;
}