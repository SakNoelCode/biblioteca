<?php

namespace App\Filament\Resources\SeparataResource\Pages;

use App\Filament\Resources\SeparataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeparatas extends ListRecords
{
    protected static string $resource = SeparataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
