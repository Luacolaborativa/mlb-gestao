<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Familias;

class FamiliasController extends Controller
{
    public function create() {
        return view('familias.create');
    }
    public function store(Request $request) {
        Familias::create([
            'nome' => $request->nome
        ]);
        return 'Família cadastrada com sucesso!';
    }
}
