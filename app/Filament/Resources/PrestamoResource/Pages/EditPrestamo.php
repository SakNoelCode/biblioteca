<?php

namespace App\Filament\Resources\PrestamoResource\Pages;

use App\Filament\Resources\PrestamoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\CustomerResource\Pages;
use App\Models\Ejemplare;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Model;

class EditPrestamo extends EditRecord
{
    protected static string $resource = PrestamoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $ejemplare_id = $data['ejemplare_id'];
        $cantidad = $data['cantidad'];
        $ejemplar = Ejemplare::find($ejemplare_id);

        if ($data['estado'] == 'devuelto') {
            $ejemplar->update([
                'cantidad' => $ejemplar->cantidad + $cantidad
            ]);
        }

        $record->update($data);
        return $record;
    }
}
