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
        $doces = $this->docesTable->getAllDoces();
        if (isThereDoceInDb($doces, $id)) {
            $doce = $this->docesTable->getDoceById($id);
            return view('pages/doces/produto', compact('doce'));
        } else {
            return view('errors/404');
        }
    }
}

function isThereDoceInDb($doces, string $id) {
    foreach ($doces as $doce) {
        if ($id === $doce->id) return true;
    }
    return false;
}