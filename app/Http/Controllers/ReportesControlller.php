<?php

namespace App\Http\Controllers;

use App\Models\Prestamista;
use App\Models\Prestamo;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Response;

class ReportesControlller extends Controller
{
    /**
     * Reporte de todos los prestamistas
     */
    public function prestamistasDownload(): Response
    {
        $prestamistas = Prestamista::all();

        $data = [
            'prestamistas' => $prestamistas
        ];

        $pdf = PDF::loadView('reportes/prestamistas', $data);

        return $pdf->stream('prestamistas.pdf');
    }

    /**
     * Reporte de todos los prestamos
     */
    public function prestamosDownload(): Response
    {
        $prestamos = Prestamo::all();

        $data = ['prestamos' => $prestamos];

        $pdf = PDF::loadView('reportes/prestamos', $data)
            ->setPaper('a4', 'landscape');;

        return $pdf->stream('prestamos.pdf');
    }

    /**
     * Reporte de los prestamos no devueltos
     */
    public function prestamosNoEntregadosDownload(): Response
    {
        $prestamos = Prestamo::where('estado', 'prestado')->get();

        $data = ['prestamos' => $prestamos];

        $pdf = PDF::loadView('reportes/prestamos-no-devueltos', $data)
            ->setPaper('a4', 'landscape');;

        return $pdf->stream('prestamos-no-devueltos.pdf');
    }
}
