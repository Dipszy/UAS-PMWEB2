<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParkirResource\Pages;
use App\Filament\Resources\ParkirResource\RelationManagers;
use App\Models\AreaParkir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParkirResource extends Resource
{
    protected static ?string $model = AreaParkir::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function getModelLabel(): string
    {
        return 'Area Parkir';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Area Parkir';
    }

    public static function getNavigationLabel(): string
    {
        return 'Area Parkir';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Area')
                    ->maxLength(30)
                    ->required(),

                Forms\Components\TextInput::make('kapasitas')
                    ->numeric()
                    ->label('Kapasitas')
                    ->required(),

                Forms\Components\Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->maxLength(45),

                Forms\Components\Select::make('kampus_id')
                    ->label('Kampus')
                    ->relationship('kampus', 'nama')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Area'),
                Tables\Columns\TextColumn::make('kapasitas'),
                Tables\Columns\TextColumn::make('keterangan')->limit(80),
                Tables\Columns\TextColumn::make('kampus.nama')->label('Kampus'),
            ])
            ->filters([])
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
            'index' => Pages\ListParkirs::route('/'),
            'create' => Pages\CreateParkir::route('/create'),
            'edit' => Pages\EditParkir::route('/{record}/edit'),
        ];
    }
}
