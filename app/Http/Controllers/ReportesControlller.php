<?php

namespace App\Http\Controllers;

use App\Models\Ejemplare;
use App\Models\Prestamista;
use App\Models\Prestamo;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Carbon\Carbon;
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
        $prestamos = Prestamo::orderBY('id', 'desc')->get();

        $data = ['prestamos' => $prestamos];

        $pdf = PDF::loadView('reportes/prestamos', $data)
            ->setPaper('a4', 'landscape');;

        return $pdf->stream('prestamos.pdf');
    }

    /**
     * Reporte de los prestamos no devueltos
     */
    public function prestamosPendientesDownload(): Response
    {
        $prestamos = Prestamo::where('estado', '<>', 'devuelto')
            //->Where('estado', '<>', 'vencido')
            ->whereDate('fecha_max_devolucion', '>=', Carbon::now()->toDateString())
            ->get();

        $data = ['prestamos' => $prestamos];

        $pdf = PDF::loadView('reportes/prestamos-pendientes', $data)
            ->setPaper('a4', 'landscape');;

        return $pdf->stream('prestamos-pendientes.pdf');
    }

    /**
     * Reporte de los prestamos vencidos
     */
    public function prestamosVencidosDownload(): Response
    {
        $prestamos = Prestamo::where('estado', '<>', 'devuelto')
            //->Where('estado', '<>', 'vencido')
            ->whereDate('fecha_max_devolucion', '<', Carbon::now()->toDateString())
            ->get();

        $data = ['prestamos' => $prestamos];

        $pdf = PDF::loadView('reportes/prestamos-vencidos', $data)
            ->setPaper('a4', 'landscape');;

        return $pdf->stream('prestamos-vencidos.pdf');
    }

     /**
     * Reporte de las Separatas
     */
    public function separatasDownload(): Response
    {
        $registros = Ejemplare::where('tipo', 'separata')
            ->get();

        $data = ['registros' => $registros];

        $pdf = PDF::loadView('reportes/separatas', $data)
            ->setPaper('a4', 'landscape');;

        return $pdf->stream('separatas.pdf');
    }

    /**
     * Reporte de las Revsitas
     */
    public function revistasDownload(): Response
    {
        $registros = Ejemplare::where('tipo', 'revista')
            ->get();

        $data = ['registros' => $registros];

        $pdf = PDF::loadView('reportes/revistas', $data)
            ->setPaper('a4', 'landscape');;

        return $pdf->stream('revistas.pdf');
    }

    /**
     * Reporte de las Separatas
     */
    public function tesisDownload(): Response
    {
        $registros = Ejemplare::where('tipo', 'tesis')
            ->get();

        $data = ['registros' => $registros];

        $pdf = PDF::loadView('reportes/tesis', $data)
            ->setPaper('a4', 'landscape');;

        return $pdf->stream('tesis.pdf');
    }

    /**
     * Reporte de las Separatas
     */
    public function librosDownload(): Response
    {
        $registros = Ejemplare::where('tipo', 'libro')
            ->get();

        $data = ['registros' => $registros];

        $pdf = PDF::loadView('reportes/libros', $data)
            ->setPaper('a4', 'landscape');;

        return $pdf->stream('libros.pdf');
    }
}
