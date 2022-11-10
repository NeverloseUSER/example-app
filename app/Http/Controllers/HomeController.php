<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home',  [
            'nameone' => 'Фильм первый',
            'descriptionone' => 'Описание Первого Фильма',
            'nametwo' => 'Фильм второй',
            'descriptiontwo' => 'Описание Второго Фильма',
            'namethree' => 'Фильм третий',
            'descriptionthree' => 'Описание Третьего Фильма',
            'namefour' => 'Фильм четвертый',
            'descriptionfour' => 'Описание Четвертого Фильма'
        ]);
    }
}
