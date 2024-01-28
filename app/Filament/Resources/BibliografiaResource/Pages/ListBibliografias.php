<?php

namespace App\Filament\Resources\BibliografiaResource\Pages;

use App\Filament\Resources\BibliografiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBibliografias extends ListRecords
{
    protected static string $resource = BibliografiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
