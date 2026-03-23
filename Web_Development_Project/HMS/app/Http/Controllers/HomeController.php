<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController 
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('home');
    }

    public function redirect()
    {
        return redirect('/home'); 
}

}

