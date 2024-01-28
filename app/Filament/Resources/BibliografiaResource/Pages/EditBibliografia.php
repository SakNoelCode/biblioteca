<?php

namespace App\Filament\Resources\BibliografiaResource\Pages;

use App\Filament\Resources\BibliografiaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBibliografia extends EditRecord
{
    protected static string $resource = BibliografiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
