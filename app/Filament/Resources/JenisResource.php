<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisResource\Pages;
use App\Filament\Resources\JenisResource\RelationManagers;
use App\Models\Jenis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisResource extends Resource
{
    protected static ?string $model = Jenis::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function getModelLabel(): string
    {
        return 'Jenis';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Jenis Kendaraan';
    }

    public static function getNavigationLabel(): string
    {
        return 'Jenis Kendaraan';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Jenis Kendaraan')
                    ->required()
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->label('ID'),
                TextColumn::make('nama')->label('Jenis Kendaraan')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListJenis::route('/'),
            'create' => Pages\CreateJenis::route('/create'),
            'edit' => Pages\EditJenis::route('/{record}/edit'),
        ];
    }
}
