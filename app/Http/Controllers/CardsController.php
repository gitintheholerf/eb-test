<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index() {
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    public function show(Card $card) {
//        return $card;
//        $card = Card::find($id);

        // Eager load to reduce roundtrips.
//        $card = Card::with('notes')->get();
//        $card = Card::with('notes')->find($card->id);
//        $card = Card::with('notes.card')->find($card->id);
        $card->load('notes.user');

        return view('cards.show', compact('card'));
    }
}
