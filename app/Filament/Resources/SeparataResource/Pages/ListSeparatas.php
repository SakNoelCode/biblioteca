<?php

namespace App\Filament\Resources\SeparataResource\Pages;

use App\Filament\Resources\SeparataResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;

class ListSeparatas extends ListRecords
{
    protected static string $resource = SeparataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Reporte')
                ->url(fn (): string => route('separatas.download'))
                ->openUrlInNewTab()
                ->color('info')
                ->icon('heroicon-o-arrow-down-tray'),
        ];
    }
}
