<?php

namespace App\Filament\Resources\PrestamoResource\Pages;

use App\Filament\Resources\PrestamoResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListPrestamos extends ListRecords
{
    protected static string $resource = PrestamoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Prestamos')
            ->url(fn():string => route('prestamos.download'))
            ->openUrlInNewTab(),
            Action::make('Prestamos no entregados')
            ->url(fn():string => route('prestamos-no-entregados.download'))
            ->openUrlInNewTab()
        ];
    }
}
