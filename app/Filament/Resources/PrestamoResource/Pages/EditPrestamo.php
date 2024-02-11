<?php

namespace App\Filament\Resources\PrestamoResource\Pages;

use App\Filament\Resources\PrestamoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CustomerResource\Pages;
use Filament\Resources\Pages\Page;

class EditPrestamo extends EditRecord
{
    protected static string $resource = PrestamoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\DeleteAction::make(),
        ];
    }
}
