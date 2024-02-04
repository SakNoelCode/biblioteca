<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibroResource\Pages;
use App\Filament\Resources\LibroResource\RelationManagers;
use App\Models\Ejemplare;
use App\Models\Libro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LibroResource extends Resource
{
    protected static ?string $model = Ejemplare::class;

    protected static ?string $modelLabel = 'Libro';

    protected static ?string $pluralModelLabel = 'Libros';

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('tipo', 'libro');
    }

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
                /*               Forms\Components\TextInput::make('cantidad')
                    ->numeric()
                    ->required()
                    ->prefix('N°'),*/

                Forms\Components\Select::make('categoria_id')
                    ->label('Categoría')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('categoria', 'descripcion')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('descripcion')
                            ->label('Nombre')
                            ->placeholder('Nombre de la categoría')
                            ->required()
                            ->unique('categorias', 'descripcion')
                            ->maxLength(255),
                    ]),
                Forms\Components\Select::make('subcategoria_id')
                    ->label('SubCategoría')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->relationship('subcategoria', 'nombre')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nombre')
                            ->label('Nombre')
                            ->placeholder('Nombre de la subcategoría')
                            ->required()
                            ->unique('subcategorias', 'nombre')
                            ->maxLength(255),
                        Forms\Components\Select::make('categoria_id')
                            ->label('Categoría')
                            ->required()
                            ->relationship('categoria', 'descripcion')
                            ->searchable()
                            ->preload(),
                    ]),
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
            'index' => Pages\ListLibros::route('/'),
            'create' => Pages\CreateLibro::route('/create'),
            'view' => Pages\ViewLibro::route('/{record}'),
            'edit' => Pages\EditLibro::route('/{record}/edit'),
        ];
    }
}
