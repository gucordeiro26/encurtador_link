<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return View("site.index");
    }

    public function redirect()
    {
    }

    public function contact()
    {
        return View("site.contact");
    }
}
