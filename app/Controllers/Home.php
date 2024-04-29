<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct() {
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();        
    }

    public function index(): string
    {
        return view('index');
    }
}
