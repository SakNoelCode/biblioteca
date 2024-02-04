<?php

namespace App\Filament\Resources\TesisResource\Pages;

use App\Filament\Resources\TesisResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTesis extends CreateRecord
{
    protected static string $resource = TesisResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['tipo'] = 'tesis';

        return $data;
    }

    
}
