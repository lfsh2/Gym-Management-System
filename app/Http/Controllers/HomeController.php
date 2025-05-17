<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'features' => [
                [
                    'title' => 'State-of-the-Art Equipment',
                    'description' => 'Access to the latest fitness equipment and technology',
                    'icon' => 'dumbbell'
                ],
                [
                    'title' => 'Expert Trainers',
                    'description' => 'Professional guidance from certified fitness experts',
                    'icon' => 'user-tie'
                ],
                [
                    'title' => 'Diverse Classes',
                    'description' => 'Wide range of group fitness classes for all levels',
                    'icon' => 'users'
                ]
            ]
        ]);
    }
}