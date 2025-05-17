<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function index()
    {
        $features = [
            [
                'name' => 'State-of-the-Art Equipment',
                'description' => 'Access to the latest fitness equipment and technology for a premium workout experience.',
                'icon' => 'dumbbell'
            ],
            [
                'name' => 'Expert Personal Trainers',
                'description' => 'Work with certified fitness professionals who will help you achieve your goals.',
                'icon' => 'user-tie'
            ],
            [
                'name' => 'Group Fitness Classes',
                'description' => 'Join our energetic group classes led by experienced instructors.',
                'icon' => 'users'
            ],
            [
                'name' => 'Nutrition Guidance',
                'description' => 'Get personalized nutrition advice to complement your fitness routine.',
                'icon' => 'apple-alt'
            ],
            [
                'name' => 'Modern Facilities',
                'description' => 'Enjoy clean, well-maintained facilities with modern amenities.',
                'icon' => 'building'
            ],
            [
                'name' => 'Flexible Hours',
                'description' => 'Open early and late to accommodate your busy schedule.',
                'icon' => 'clock'
            ]
        ];

        return view('features', ['features' => $features]);
    }
}