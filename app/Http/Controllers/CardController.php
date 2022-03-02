<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use App\Events\ScoreUpdated;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function leaderboard () {
        return User::all(['id', 'name', 'score']);
    }

    public function show(Card $card) {
        $user = auth()->user();
        $user->score = $user->score + $card->value;
        $user->save();

        event(new ScoreUpdated($user));

        return redirect()->back()->withValue($card->value);
    }
}
