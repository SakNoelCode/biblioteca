<?php

namespace App\Filament\Resources\RevistaResource\Pages;

use App\Filament\Resources\RevistaResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListRevistas extends ListRecords
{
    protected static string $resource = RevistaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Reporte')
                ->url(fn (): string => route('revistas.download'))
                ->openUrlInNewTab()
                ->color('info')
                ->icon('heroicon-o-arrow-down-tray'),
        ];
    }
}
