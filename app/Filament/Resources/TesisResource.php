<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TesisResource\Pages;
use App\Filament\Resources\TesisResource\RelationManagers;
use App\Models\Ejemplare;
use App\Models\Tesis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TesisResource extends Resource
{
    protected static ?string $model = Ejemplare::class;

    protected static ?string $modelLabel = 'Tesis';

    protected static ?string $pluralModelLabel = 'Tesis';

    protected static ?string $navigationIcon = 'heroicon-s-clipboard-document';

    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('tipo', 'tesis');
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
                Forms\Components\TextInput::make('nombre_revista')
                    ->maxLength(255)
                    ->label('Nombre de la revista')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('fecha_publicacion')
                    ->label('Fecha de publicación')
                    ->required(),
                Forms\Components\TextInput::make('asesor')
                    ->maxLength(255)
                    ->required(),
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
            'index' => Pages\ListTeses::route('/'),
            'create' => Pages\CreateTesis::route('/create'),
            'view' => Pages\ViewTesis::route('/{record}'),
            'edit' => Pages\EditTesis::route('/{record}/edit'),
        ];
    }
}
