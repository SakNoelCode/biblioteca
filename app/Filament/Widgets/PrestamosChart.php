<?php

namespace App\Filament\Widgets;

use App\Models\Prestamo;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class PrestamosChart extends ChartWidget
{
    protected static ?string $heading = 'Prestamos';

    protected function getData(): array
    {
        $data = Trend::model(Prestamo::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Prestamos',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
