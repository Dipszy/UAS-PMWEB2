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
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
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
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Area')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('kapasitas')
                    ->label('Kapasitas')
                    ->sortable(),
                Tables\Columns\TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(80)
                    ->sortable(),
                Tables\Columns\TextColumn::make('kampus.nama')
                    ->label('Kampus')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function canViewAny(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['Admin', 'Pegawai']);
    }

    public static function canView(Model $record): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['Admin', 'Pegawai']);
    }

    public static function canCreate(): bool
    {
        return Auth::check() && Auth::user()->role === 'Admin';
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::check() && Auth::user()->role === 'Admin';
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::check() && Auth::user()->role === 'Admin';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['Admin', 'Pegawai']);
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
