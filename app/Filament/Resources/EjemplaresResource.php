<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EjemplaresResource\Pages;
use App\Filament\Resources\EjemplaresResource\RelationManagers;
use App\Models\Ejemplare;
use App\Models\Tipo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EjemplaresResource extends Resource
{
    protected static ?string $model = Ejemplare::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->maxLength(255)
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('autor')
                    ->maxLength(255)
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('editorial')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('edicion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cantidad')
                    ->numeric()
                    ->required()
                    ->prefix('N°'),
                Forms\Components\Select::make('tipo_id')
                    ->label('Tipo')
                    ->required()
                    ->options(Tipo::all()->pluck('descripcion', 'id')),
                Forms\Components\Select::make('categoria_id')
                    ->label('Categoría')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('categoria', 'descripcion'),
                Forms\Components\Select::make('subcategoria_id')
                    ->label('SubCategoría')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('subcategoria', 'nombre'),
                Forms\Components\Textarea::make('descripcion')
                    ->label('Descripción')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('autor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cantidad')
                    ->searchable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListEjemplares::route('/'),
            'create' => Pages\CreateEjemplares::route('/create'),
            'edit' => Pages\EditEjemplares::route('/{record}/edit'),
        ];
    }
}
