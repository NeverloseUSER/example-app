<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'nameone' => 'Фильм первый',
            'descriptionone' => 'Описание Первое',
            'nametwo' => 'Фильм второй',
            'descriptiontwo' => 'Описание Второе',
            'namethree' => 'Фильм третий',
            'descriptionthree' => 'Описание Третье',
            'namefour' => 'Фильм четвертый',
            'descriptionfour' => 'Описание Четвертое'
        ]);
    }
}
