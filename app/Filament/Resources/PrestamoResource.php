<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestamoResource\Pages;
use App\Filament\Resources\PrestamoResource\RelationManagers;
use App\Models\Prestamo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrestamoResource extends Resource
{
    protected static ?string $model = Prestamo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('prestamista_id')
                    ->relationship('prestamista', 'razon_social')
                    ->required()
                    ->columnSpanFull()
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('ejemplare_id')
                    ->label('Ejemplar')
                    ->relationship('ejemplare', 'nombre')
                    ->required()
                    ->columnSpanFull()
                    ->searchable()
                    ->preload(),
                Forms\Components\DatePicker::make('fecha_max_devolucion')
                    ->label('Fecha de devolución máxima')
                    ->minDate(now())
                    ->required(),
                Forms\Components\DateTimePicker::make('fecha_hora_prestamo')
                    ->label('Fecha y hora del prestamo')
                    ->required()
                    ->readOnly()
                    ->default(now())
                    ->seconds(false),
                Forms\Components\Textarea::make('observaciones')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prestamista.razon_social')
                    ->label('Prestamista'),
                Tables\Columns\TextColumn::make('ejemplare.nombre')
                    ->label('Libro prestado'),
                Tables\Columns\TextColumn::make('fecha_max_devolucion')
                    ->label('Se debe devolver el')
                    ->date(),
                Tables\Columns\TextColumn::make('estado')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'activo' => 'gray',
                        'reviewing' => 'warning',
                        'published' => 'success',
                        'rejected' => 'danger',
                        default => 'info',
                    })

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrestamos::route('/'),
            'create' => Pages\CreatePrestamo::route('/create'),
            'view' => Pages\ViewPrestamo::route('/{record}'),
            'edit' => Pages\EditPrestamo::route('/{record}/edit'),
        ];
    }
}
