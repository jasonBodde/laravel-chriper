<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            [
                'author' => 'Jane doe',
                'message' => 'Just deployed my first laravel app',
                'time' => '2 hours ago'
            ],
            [
                'author' => 'John doed',
                'message' => 'Just deployed my first laravel app',
                'time' => '10 minutes ago'
            ],
            [
                'author' => 'John doen',
                'message' => 'Just deployed my first laravel app',
                'time' => '5 hours ago'
            ]
        ];
        return view('home', ['chirps' => $chirps]);
    }
}
