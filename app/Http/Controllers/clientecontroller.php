<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class clientecontroller extends Controller
{
    public function index()
    {
        $cliente=Cliente::find(1);
        return $cliente;
        // return csrf_token();
    }
}
