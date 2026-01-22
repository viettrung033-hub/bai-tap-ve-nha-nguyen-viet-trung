<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function projects() {
        return view('pages.projects');
    }

    public function contact() {
        return view('pages.contact');
    }
}