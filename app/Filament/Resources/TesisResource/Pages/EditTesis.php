<?php

namespace App\Filament\Resources\TesisResource\Pages;

use App\Filament\Resources\TesisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTesis extends EditRecord
{
    protected static string $resource = TesisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
