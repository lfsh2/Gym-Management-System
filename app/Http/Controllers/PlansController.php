<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $plans = [
            [
                'name' => 'Basic',
                'price' => 49.99,
                'duration' => 'month',
                'features' => [
                    'Access to gym facilities',
                    'Basic fitness equipment',
                    'Locker room access',
                    'Free wifi',
                    'Fitness assessment',
                ]
            ],
            [
                'name' => 'Premium',
                'price' => 79.99,
                'duration' => 'month',
                'features' => [
                    'All Basic features',
                    'Group fitness classes',
                    'Swimming pool access',
                    '1 PT session per month',
                    'Nutrition consultation',
                    'Mobile app access',
                ]
            ],
            [
                'name' => 'Elite',
                'price' => 129.99,
                'duration' => 'month',
                'features' => [
                    'All Premium features',
                    '3 PT sessions per month',
                    'Spa & sauna access',
                    'Priority class booking',
                    'Guest passes (2/month)',
                    'Advanced health tracking',
                    'Exclusive events access',
                ]
            ]
        ];

        return view('plans', ['plans' => $plans]);
    }
}