<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function __invoke()
    {
        return $this->index();
    }

    public function index()
    {
        // Your controller logic here
        return view('proto');
    }
}
