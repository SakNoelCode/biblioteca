<?php

namespace App\Filament\Resources\EjemplaresResource\Pages;

use App\Filament\Resources\EjemplaresResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEjemplares extends EditRecord
{
    protected static string $resource = EjemplaresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
