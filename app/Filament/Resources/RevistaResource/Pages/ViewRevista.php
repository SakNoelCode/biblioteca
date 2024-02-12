<?php

namespace App\Filament\Resources\RevistaResource\Pages;

use App\Filament\Resources\RevistaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRevista extends ViewRecord
{
    protected static string $resource = RevistaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
