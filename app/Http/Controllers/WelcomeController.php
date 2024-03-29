<?php

namespace App\Http\Controllers;

use App\Models\Ejemplare;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(): View
    {
        $librosPopulares = Ejemplare::where('tipo', 'libro')
            ->orderBy('veces_prestado', 'desc')
            ->limit(3)
            ->get();

        $tesis = Ejemplare::where('tipo', 'tesis')
            ->orderBy('fecha_publicacion', 'desc')
            ->limit(4)
            ->get();

        return view('welcome', compact('librosPopulares', 'tesis'));
    }

    public function buscarEjemplar(Request $request)
    {
        $nombre = $request->input('nombre');
        $libroExiste = Ejemplare::whereRaw('LOWER(nombre) = ?', strtolower($nombre))->first();
        $libroDisponible = Ejemplare::whereRaw('LOWER(nombre) = ?', strtolower($nombre))->where('cantidad','>', 0)->first();

        return response()->json(
            [
                'nombre' => $nombre,
                'existencia' => $libroExiste ? 'Ejemplar encontrado.' : 'Ejemplar no encontrado.',
                'disponibilidad' => $libroDisponible ? 'Ejemplar disponible.' : 'Ejemplar no disponible.'
            ]
        );
    }
}
