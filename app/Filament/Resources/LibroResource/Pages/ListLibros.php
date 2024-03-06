<?php

namespace App\Filament\Resources\LibroResource\Pages;

use App\Filament\Resources\LibroResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListLibros extends ListRecords
{
    protected static string $resource = LibroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Reporte')
                ->url(fn (): string => route('libros.download'))
                ->openUrlInNewTab()
                ->color('info')
                ->icon('heroicon-o-arrow-down-tray'),
        ];
    }
}
