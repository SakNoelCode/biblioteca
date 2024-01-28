<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubcategoriaResource\Pages;
use App\Filament\Resources\SubcategoriaResource\RelationManagers;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubcategoriaResource extends Resource
{
    protected static ?string $model = Subcategoria::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->label('Nombre')
                    ->placeholder('Nombre de la subcategoría')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('categoria_id')
                    ->label('Categoría')
                    ->required()
                    ->relationship('categoria', 'descripcion')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('descripcion')
                            ->label('Nombre')
                            ->placeholder('Nombre de la categoría')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                ->searchable(),
                Tables\Columns\TextColumn::make('categoria.descripcion')
                    ->label('Categoría'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('categoria_id')
                ->label('Categoría')
                ->options(Categoria::all()->pluck('descripcion','id'))
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
            'index' => Pages\ListSubcategorias::route('/'),
            'create' => Pages\CreateSubcategoria::route('/create'),
            'edit' => Pages\EditSubcategoria::route('/{record}/edit'),
        ];
    }
}
