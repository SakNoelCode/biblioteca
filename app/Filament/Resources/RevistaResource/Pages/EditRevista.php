<?php

namespace App\Filament\Resources\RevistaResource\Pages;

use App\Filament\Resources\RevistaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRevista extends EditRecord
{
    protected static string $resource = RevistaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
