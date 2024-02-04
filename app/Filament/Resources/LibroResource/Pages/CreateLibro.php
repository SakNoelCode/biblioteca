<?php

namespace App\Filament\Resources\LibroResource\Pages;

use App\Filament\Resources\LibroResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLibro extends CreateRecord
{
    protected static string $resource = LibroResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['tipo'] = 'libro';

        return $data;
    }
}
