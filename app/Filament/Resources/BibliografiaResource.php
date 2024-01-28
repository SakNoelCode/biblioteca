<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BibliografiaResource\Pages;
use App\Filament\Resources\BibliografiaResource\RelationManagers;
use App\Models\Bibliografia;
use App\Models\Categoria;
use App\Models\Subcategoria;
use App\Models\Tipo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BibliografiaResource extends Resource
{
    protected static ?string $model = Bibliografia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('editorial')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('edicion')
                ->label('Edición')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('cantidad')
                ->numeric()
                ->required()
                ->maxLength(255),
                Forms\Components\Textarea::make('descripcion')
                ->label('Descripción'),
                Forms\Components\Select::make('tipo_id')
                ->label('Tipo')
                ->required()
                ->options(Tipo::all()->pluck('descripcion','id'))
                ->searchable(),
                Forms\Components\Select::make('categoria_id')
                ->label('Categoría')
                ->required()
                ->options(Categoria::all()->pluck('descripcion','id'))
                ->searchable(),
          /*      Forms\Components\Select::make('subcategoria_id')
                ->label('Subcategoría')
                ->required()
                ->options(Subcategoria::where('categoria_id','categoria_id')->pluck('descripcion','id'))
                ->searchable()*/
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
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
            'index' => Pages\ListBibliografias::route('/'),
            'create' => Pages\CreateBibliografia::route('/create'),
            'edit' => Pages\EditBibliografia::route('/{record}/edit'),
        ];
    }
}
