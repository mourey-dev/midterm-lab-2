<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index() {
        return view("index");
    }

    public function show(Request $request) {
        $keyword = $request->keyword;

        $quotes = Quote::query()
        ->where('quote', 'like', "%{$keyword}%")
        ->orWhere('author', 'like', "%{$keyword}%")
        ->get();
        return view("result", compact("quotes"));
    }
}
