<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('pages/home', ['title' => 'Simple POS']);
    }

    public function about(): string
    {
        return view('pages/about', ['title' => 'About Simple POS']);
    }
}
