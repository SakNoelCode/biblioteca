<?php

namespace App\Filament\Resources\EjemplaresResource\Pages;

use App\Filament\Resources\EjemplaresResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEjemplare extends ViewRecord
{
    protected static string $resource = EjemplaresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
