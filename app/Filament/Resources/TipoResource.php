<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TipoResource\Pages;
use App\Filament\Resources\TipoResource\RelationManagers;
use App\Models\Tipo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TipoResource extends Resource
{
    protected static ?string $model = Tipo::class;

    protected static ?string $navigationIcon = 'heroicon-s-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Forms\Components\TextInput::make('descripcion')
                 ->label('Nombre')
                 ->required()
                 ->unique('tipos','descripcion')
                 ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('descripcion')
                ->label('Nombre')
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
            'index' => Pages\ListTipos::route('/'),
            'create' => Pages\CreateTipo::route('/create'),
            'edit' => Pages\EditTipo::route('/{record}/edit'),
        ];
    }
}
