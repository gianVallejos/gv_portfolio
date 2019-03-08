<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index () {
        return view('portfolios.index');
    }

    public function detail ($id) {
        return view('portfolios.detail', compact('id'));
    }
}
