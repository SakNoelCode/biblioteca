<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventarioResource\Pages;
use App\Filament\Resources\InventarioResource\RelationManagers;
use App\Models\Ejemplare;
use App\Models\Inventario;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventarioResource extends Resource
{
    protected static ?string $model = Inventario::class;

    protected static ?string $modelLabel = 'Inventario';

    protected static ?string $pluralModelLabel = 'Inventario';

    protected static ?string $navigationIcon = 'heroicon-s-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('ejemplare_id')
                    ->label('Seleccione el libro o tesis')
                    ->searchable()
                    ->preload()
                    ->relationship('ejemplare', 'nombre')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('codigo')
                    ->label('Ingrese código (Debe ser único)')
                    ->unique('inventarios', 'codigo')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ejemplare.nombre')
                    ->label('Nombre del libro o tesis'),
                Tables\Columns\TextColumn::make('codigo')
                    ->label('Código'),
                Tables\Columns\TextColumn::make('estado')
                    ->badge()
                    ->color('info'),
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListInventarios::route('/'),
            'create' => Pages\CreateInventario::route('/create'),
            'edit' => Pages\EditInventario::route('/{record}/edit'),
        ];
    }
}
