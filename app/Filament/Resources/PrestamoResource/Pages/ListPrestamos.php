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
                ->url(fn (): string => route('prestamos.download'))
                ->openUrlInNewTab()
                ->color('info')
                ->icon('heroicon-o-arrow-down-tray'),
            Action::make('Prestamos vencidos')
                ->url(fn (): string => route('prestamos-vencidos.download'))
                ->openUrlInNewTab()
                ->color('info')
                ->icon('heroicon-o-arrow-down-tray'),
            Action::make('Prestamos pendientes')
                ->url(fn (): string => route('prestamos-pendientes.download'))
                ->openUrlInNewTab()
                ->color('info')
                ->icon('heroicon-o-arrow-down-tray'),
        ];
    }
}
