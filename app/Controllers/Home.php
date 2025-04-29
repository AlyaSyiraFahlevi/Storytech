<?php

namespace App\Controllers;

use App\Models\InovasiModel; // Import model

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
}
