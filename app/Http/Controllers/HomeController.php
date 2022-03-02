<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $cards = Card::inRandomOrder()->take(3)->get();
        return view('dashboard', compact('cards'));
    }
}
