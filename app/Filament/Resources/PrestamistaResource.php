<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestamistaResource\Pages;
use App\Filament\Resources\PrestamistaResource\RelationManagers;
use App\Models\Prestamista;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrestamistaResource extends Resource
{
    protected static ?string $model = Prestamista::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('codigo')
                ->label('Código')
                ->required()
                ->maxLength('255'),
                Forms\Components\TextInput::make('razon_social')
                ->label('Nombres y Apellidos')
                ->required()
                ->maxLength('255'),
                Forms\Components\Select::make('tipo')
                ->required()
                ->options([
                    'docente' => 'Docente',
                    'estudiante' => 'Estudiante',
                    'otro' => 'Otro'
                ])
                ->native(false),
                Forms\Components\Textarea::make('detalles')
                ->placeholder('Ingrese información extra sobre el prestamista')
                ->maxLength('255')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('codigo')
                ->searchable(),
                Tables\Columns\TextColumn::make('razon_social')
                ->searchable(),
                Tables\Columns\TextColumn::make('tipo')
                ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('tipo')
                ->options([
                    'estudiante' => 'Estudiante',
                    'docente' => 'Docente',
                    'otro' => 'Otro',
                ]),
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
            'index' => Pages\ListPrestamistas::route('/'),
            'create' => Pages\CreatePrestamista::route('/create'),
            'edit' => Pages\EditPrestamista::route('/{record}/edit'),
        ];
    }
}
