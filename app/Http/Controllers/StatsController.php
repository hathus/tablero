<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index()
    {
        // Aquí puedes pasar datos a la vista si quieres mostrar datos dinámicos
        return view('stats');
    }
}
