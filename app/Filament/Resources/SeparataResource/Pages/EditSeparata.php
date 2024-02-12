<?php

namespace App\Filament\Resources\SeparataResource\Pages;

use App\Filament\Resources\SeparataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeparata extends EditRecord
{
    protected static string $resource = SeparataResource::class;

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
