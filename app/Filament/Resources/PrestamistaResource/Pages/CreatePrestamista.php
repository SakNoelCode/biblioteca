<?php

namespace App\Filament\Resources\PrestamistaResource\Pages;

use App\Filament\Resources\PrestamistaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePrestamista extends CreateRecord
{
    protected static string $resource = PrestamistaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
