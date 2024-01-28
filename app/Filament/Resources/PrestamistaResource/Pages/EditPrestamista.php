<?php

namespace App\Filament\Resources\PrestamistaResource\Pages;

use App\Filament\Resources\PrestamistaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrestamista extends EditRecord
{
    protected static string $resource = PrestamistaResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\DeleteAction::make(),
        ];
    }
}
