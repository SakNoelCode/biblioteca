<?php

namespace App\Filament\Resources\TesisResource\Pages;

use App\Filament\Resources\TesisResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListTeses extends ListRecords
{
    protected static string $resource = TesisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Action::make('Reporte')
                ->url(fn (): string => route('tesis.download'))
                ->openUrlInNewTab()
                ->color('info')
                ->icon('heroicon-o-arrow-down-tray'),
        ];
    }
}
