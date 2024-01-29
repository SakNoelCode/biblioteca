<?php

namespace App\Filament\Widgets;

use App\Models\Prestamista;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PrestamistaTipoOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Docentes', Prestamista::query()->where('tipo', 'docente')->count()),
            Stat::make('Estudiantes', Prestamista::query()->where('tipo', 'estudiante')->count()),
            Stat::make('Otros', Prestamista::query()->where('tipo', 'otro')->count()),
        ];
    }
}
