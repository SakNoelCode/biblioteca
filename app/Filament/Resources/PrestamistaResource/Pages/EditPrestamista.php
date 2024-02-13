<?php

namespace App\Filament\Resources\PrestamistaResource\Pages;

use App\Filament\Resources\PrestamistaResource;
use App\Models\Prestamista;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use PhpParser\Node\Expr\Cast\String_;

class EditPrestamista extends EditRecord
{
    protected static string $resource = PrestamistaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
