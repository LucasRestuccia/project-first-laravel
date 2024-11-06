<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function showHello()
    {
        $data = [
            'firstName' => 'Anabella',
            'lastName' => 'Quintero',
        ];
        return view('hello', $data);
    }
}
