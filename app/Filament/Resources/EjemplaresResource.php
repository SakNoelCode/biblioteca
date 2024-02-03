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

    protected static ?string $modelLabel = 'Ejemplar';

    protected static ?string $pluralModelLabel = 'Ejemplares';

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->maxLength(255)
                    ->required()
                    ->unique('ejemplares', 'nombre')
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
                    ->relationship('tipo', 'descripcion')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('descripcion')
                            ->label('Nombre')
                            ->required()
                            ->unique('tipos', 'descripcion')
                            ->maxLength(255)
                    ]),
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
                Tables\Columns\TextColumn::make('cantidad')
                    ->searchable(),
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
            'index' => Pages\ListEjemplares::route('/'),
            'create' => Pages\CreateEjemplares::route('/create'),
            'view' => Pages\ViewEjemplare::route('/{record}'),
            'edit' => Pages\EditEjemplares::route('/{record}/edit'),
        ];
    }
}
