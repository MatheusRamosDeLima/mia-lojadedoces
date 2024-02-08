<?php

namespace App\Http\Controllers;

use App\Models\DocesTable;
use Illuminate\Http\Request;

class DoceController extends Controller {
    private DocesTable $docesTable;

    public function __construct() {
        $this->docesTable = new DocesTable;
    }

    public function index() {
        $doces = $this->docesTable->getAllDoces();
        return view('pages/doces/index', compact('doces'));
    }
    public function produto(string $id) {
        $doce = $this->docesTable->getDoceById($id);
        return view('pages/doces/produto', compact('doce'));
    }
}