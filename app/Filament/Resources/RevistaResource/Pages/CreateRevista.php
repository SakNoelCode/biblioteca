<?php

namespace App\Filament\Resources\RevistaResource\Pages;

use App\Filament\Resources\RevistaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRevista extends CreateRecord
{
    protected static string $resource = RevistaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['tipo'] = 'revista';

        return $data;   
    }
}
