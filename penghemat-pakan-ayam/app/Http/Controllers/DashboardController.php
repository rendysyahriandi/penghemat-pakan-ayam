<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard', [
            'summary' => [
                'chickenCount' => 1248,
                'feedStock' => 6800,
                'dailyUsage' => 420,
                'feedSavings' => 1850000,
            ],
            'consumption' => [
                ['day' => 'Sen', 'value' => 385],
                ['day' => 'Sel', 'value' => 410],
                ['day' => 'Rab', 'value' => 398],
                ['day' => 'Kam', 'value' => 455],
                ['day' => 'Jum', 'value' => 420],
                ['day' => 'Sab', 'value' => 438],
                ['day' => 'Min', 'value' => 402],
            ],
            'feedStocks' => [
                ['name' => 'Kandang A', 'stock' => 42, 'color' => '#2f7d32'],
                ['name' => 'Kandang B', 'stock' => 31, 'color' => '#63a65a'],
                ['name' => 'Kandang C', 'stock' => 27, 'color' => '#a7c957'],
            ],
        ]);
    }
}
