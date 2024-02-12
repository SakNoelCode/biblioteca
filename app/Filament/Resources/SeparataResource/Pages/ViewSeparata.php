<?php

namespace App\Filament\Resources\SeparataResource\Pages;

use App\Filament\Resources\SeparataResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSeparata extends ViewRecord
{
    protected static string $resource = SeparataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
