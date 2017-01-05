<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        //$users = DB::table('users')->get();
        $users = [];
        return view('welcome', compact('users'));
    }

    public function about() {
        return view('about');
    }
}
