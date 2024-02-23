<?php

namespace App\Filament\Resources\PrestamistaResource\Pages;

use App\Filament\Resources\PrestamistaResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListPrestamistas extends ListRecords
{
    protected static string $resource = PrestamistaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Reporte')
            ->url(fn(): string =>route('prestamistas.download'))
            ->openUrlInNewTab(),
        ];
    }
}
