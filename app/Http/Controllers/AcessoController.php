<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcessoController extends Controller
{
    public function index()
    {
        return view('acesso.login');
    }
}
