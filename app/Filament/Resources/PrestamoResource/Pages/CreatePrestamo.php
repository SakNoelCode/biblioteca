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
use App\Models\Prestamo;
use Closure;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

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
            'cantidad' => $ejemplar->cantidad - $cantidad,
            'veces_prestado' => $ejemplar->veces_prestado + 1,
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
                        ->live()
                        ->columnSpanFull()
                        ->searchable(['razon_social', 'codigo'])
                        ->preload()
                        ->rules([
                            function () {
                                return function (string $attribute, $value, Closure $fail) {
                                    $existe = Prestamo::where('prestamista_id', $value)
                                        ->where(function ($query) {
                                            $query->where('estado', 'prestado')
                                                ->orWhere('estado', 'vencido');
                                        })
                                        ->exists();
                                    if ($existe) {
                                        $fail('El prestamista tiene un prestamo activo.');
                                    }
                                };
                            }
                        ]),
                ]),
            Step::make('Tipo')
                ->description('Seleccione el tipo')
                ->schema([
                    Select::make('tipo')
                        ->label('Tipo')
                        ->options([
                            'tesis' => 'Tesis',
                            'libro' => 'Libro',
                            'separata' => 'Separata',
                            'revista' => 'Revista'
                        ])
                        ->required()
                        ->live()
                        ->afterStateUpdated(fn (Set $set) => $set('ejemplare_id', null)),
                ]),
            Step::make('Ejemplar')
                ->description('Seleccione el ejemplar')
                ->schema([
                    Select::make('ejemplare_id')
                        ->label('Ejemplar')
                        ->options(fn (Get $get): Collection => Ejemplare::query()
                            ->where('tipo', $get('tipo'))
                            ->pluck('nombre', 'id'))
                        ->live()
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
                        ->default(1)
                        ->readOnly()
                        ->numeric()
                        ->prefix('N°')
                        ->rules([
                            fn (Get $get): Closure => function (string $attribute, $value, Closure $fail) use ($get) {
                                $id = (int) $get('ejemplare_id');
                                $existe = Ejemplare::where('id', $id)
                                    ->where('cantidad', '=', 0)
                                    ->exists();
                                if ($existe) {
                                    $fail("Ya no existe la cantidad suficiente del ejemplar.");
                                }
                            },
                        ]),
                    Textarea::make('observaciones')
                        ->columnSpanFull(),
                ]),
        ];
    }
}
