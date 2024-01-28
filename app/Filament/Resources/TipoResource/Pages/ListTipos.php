<?php

namespace App\Filament\Resources\TipoResource\Pages;

use App\Filament\Resources\TipoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipos extends ListRecords
{
    protected static string $resource = TipoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
