<?php

namespace App\Http\Controllers;

use App\Models\Ejemplare;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $libro1 = Ejemplare::where('tipo','libro');
        
        return view('welcome');
    }
}
