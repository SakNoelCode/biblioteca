<?php

namespace App\Filament\Resources\SubcategoriaResource\Pages;

use App\Filament\Resources\SubcategoriaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubcategoria extends EditRecord
{
    protected static string $resource = SubcategoriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
