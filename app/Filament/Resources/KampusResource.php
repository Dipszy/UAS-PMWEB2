<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KampusResource\Pages;
use App\Filament\Resources\KampusResource\RelationManagers;
use App\Models\Kampus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KampusResource extends Resource
{
    protected static ?string $model = Kampus::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function getModelLabel(): string
    {
        return 'Kampus';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Kampus';
    }


    public static function getNavigationLabel(): string
    {
        return 'Kampus';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar Kampus')
                    ->image()
                    ->directory('kampus-images')
                    ->disk('public')
                    ->imagePreviewHeight('200')
                    ->previewable()
                    ->downloadable()
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('nama')
                    ->label('Nama Kampus')
                    ->maxLength(20)
                    ->required(),

                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->maxLength(45)
                    ->required(),

                Forms\Components\TextInput::make('latitude')
                    ->label('Latitude')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('longitude')
                    ->label('Longitude')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Foto')
                    ->disk('public')
                    ->circular(),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Kampus')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->sortable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->searchable()
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
            'index' => Pages\ListKampuses::route('/'),
            'create' => Pages\CreateKampus::route('/create'),
            'edit' => Pages\EditKampus::route('/{record}/edit'),
        ];
    }
}
