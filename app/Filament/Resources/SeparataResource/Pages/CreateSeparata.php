<?php

namespace App\Filament\Resources\SeparataResource\Pages;

use App\Filament\Resources\SeparataResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSeparata extends CreateRecord
{
    protected static string $resource = SeparataResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['tipo'] = 'separata';

        return $data;   
    }
}
