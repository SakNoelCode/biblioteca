<?php

namespace App\Filament\Resources\TesisResource\Pages;

use App\Filament\Resources\TesisResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTesis extends ViewRecord
{
    protected static string $resource = TesisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
