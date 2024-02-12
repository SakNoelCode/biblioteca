<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RevistaResource\Pages;
use App\Filament\Resources\RevistaResource\RelationManagers;
use App\Models\Ejemplare;
use App\Models\Revista;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RevistaResource extends Resource
{
    protected static ?string $model = Ejemplare::class;

    protected static ?string $modelLabel = 'Revista';

    protected static ?string $pluralModelLabel = 'Revistas';

    protected static ?string $navigationIcon = 'heroicon-s-bookmark-square';

    protected static ?int $navigationSort = 3;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('tipo', 'revista');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->label('Nombre')
                    ->maxLength(255)
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('pais_ciudad')
                    ->label('País/Ciudad')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\Select::make('categoria_id')
                    ->label('Categoría')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('categoria', 'descripcion')
                    ->live()
                    ->afterStateUpdated(fn (Set $set) => $set('subcategoria_id', null))
                    ->createOptionForm([
                        Forms\Components\TextInput::make('descripcion')
                            ->label('Nombre')
                            ->placeholder('Nombre de la categoría')
                            ->required()
                            ->unique('categorias', 'descripcion')
                            ->maxLength(255),
                    ]),
                Forms\Components\DatePicker::make('fecha_publicacion')
                    ->label('Fecha de publicación')
                    ->required(),
                Forms\Components\TextInput::make('numero_paginas')
                    ->label('N° de páginas')
                    ->nullable()
                    ->integer(),
                Forms\Components\TextInput::make('cantidad')
                    ->required()
                    ->integer(),

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
                Tables\Columns\TextColumn::make('pais_ciudad')
                    ->label('País/Ciudad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cantidad')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListRevistas::route('/'),
            'create' => Pages\CreateRevista::route('/create'),
            'view' => Pages\ViewRevista::route('/{record}'),
            'edit' => Pages\EditRevista::route('/{record}/edit'),
        ];
    }
}
