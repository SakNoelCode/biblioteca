<?php

namespace App\Filament\Resources\RevistaResource\Pages;

use App\Filament\Resources\RevistaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRevistas extends ListRecords
{
    protected static string $resource = RevistaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
