<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome($ten)
    {
        return view('welcome', data: [
            'ten' => $ten
        ]);
    }
}
