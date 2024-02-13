<?php

namespace App\Filament\Resources\PrestamoResource\Pages;

use App\Filament\Resources\PrestamoResource;
use App\Models\Ejemplare;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard\Step;
use App\Models\Prestamista;
use Illuminate\Database\Eloquent\Model;

class CreatePrestamo extends CreateRecord
{
    protected static string $resource = PrestamoResource::class;

    use CreateRecord\Concerns\HasWizard;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    //Guardar de manera personalizada
    protected function handleRecordCreation(array $data): Model
    {
        $ejemplare_id = $data['ejemplare_id'];
        $cantidad = $data['cantidad'];
        $ejemplar = Ejemplare::find($ejemplare_id);

        $ejemplar->update([
            'cantidad' => $ejemplar->cantidad - $cantidad
        ]);

        return static::getModel()::create($data);
    }

    protected function getSteps(): array
    {
        return [
            Step::make('Prestamista')
                ->description('Seleccione la persona que hará el prestamo')
                ->schema([
                    Select::make('prestamista_id')
                        ->label('Prestamista (Nombre - Código)')
                        ->relationship(
                            name: 'prestamista',
                            titleAttribute: 'razon_social'
                        )
                        ->getOptionLabelFromRecordUsing(fn (Prestamista $record) => "{$record->razon_social} - {$record->codigo}")
                        ->required()
                        ->columnSpanFull()
                        ->searchable(['razon_social', 'codigo'])
                        ->preload(),
                ]),
            Step::make('Ejemplar')
                ->description('Seleccione un ejemplar')
                ->schema([
                    Select::make('ejemplare_id')
                        ->label('Ejemplar')
                        ->relationship(
                            name: 'ejemplare',
                            titleAttribute: 'nombre'
                        )
                        ->getOptionLabelFromRecordUsing(fn (Ejemplare $record) => "{$record->nombre}")
                        ->required()
                        ->columnSpanFull()
                        ->searchable()
                        ->preload(),
                ]),
            Step::make('Devolución')
                ->description('Gestione la devolución')
                ->schema([
                    DatePicker::make('fecha_max_devolucion')
                        ->label('Fecha de devolución máxima')
                        ->minDate(now())
                        ->required(),
                    TextInput::make('cantidad')
                        ->numeric()
                        ->required()
                        ->prefix('N°'),
                    Textarea::make('observaciones')
                        ->columnSpanFull(),
                ]),
        ];
    }
}
