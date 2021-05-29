<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function home($name)
    {
        $upperName = strtoupper($name);
        return view('home', [
            'name' => $upperName
        ]);
    }

    public function second()
    {
        $age = 6;
        return view('second', [
            'age' => $age
        ]);
    }
}
