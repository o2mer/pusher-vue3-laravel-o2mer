<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function show(Card $card) {
        $user = auth()->user();
        $user->score = $user->score + $card->value;
        $user->save();

        return redirect()->back()->withValue($card->value);
    }
}
