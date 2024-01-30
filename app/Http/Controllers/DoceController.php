<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoceController extends Controller {
    public function index() {
        return view('pages/doces/index');
    }
    public function produto(string $id) {
        return view('pages/doces/produto', compact('id'));
    }
}