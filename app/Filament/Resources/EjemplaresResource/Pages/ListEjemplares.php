<?php

namespace App\Filament\Resources\EjemplaresResource\Pages;

use App\Filament\Resources\EjemplaresResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEjemplares extends ListRecords
{
    protected static string $resource = EjemplaresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
