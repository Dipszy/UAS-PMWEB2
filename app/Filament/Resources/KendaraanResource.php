<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KendaraanResource\Pages;
use App\Filament\Resources\KendaraanResource\RelationManagers;
use App\Models\Kendaraan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function getModelLabel(): string
    {
        return 'Kendaraan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Kendaraan';
    }

    public static function getNavigationLabel(): string
    {
        return 'Kendaraan';
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('merk')
                ->label('Merk Kendaraan')
                ->required(),

            Forms\Components\TextInput::make('pemilik')
                ->label('Nama Pemilik')
                ->required(),

            Forms\Components\TextInput::make('nopol')
                ->label('No. Polisi')
                ->required(),

            Forms\Components\TextInput::make('thn_beli')
                ->label('Tahun Pembelian')
                ->numeric(),

            Forms\Components\Textarea::make('deskripsi')
                ->label('Deskripsi Kendaraan'),

            Forms\Components\Select::make('jenis_kendaraan_id')
                ->label('Jenis Kendaraan')
                ->relationship('jenis', 'nama')
                ->required(),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('merk')->label('Merk'),
                Tables\Columns\TextColumn::make('pemilik')->label('Pemilik'),
                Tables\Columns\TextColumn::make('nopol')->label('No. Polisi'),
                Tables\Columns\TextColumn::make('thn_beli')->label('Tahun Beli'),
                Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi')->limit(30),
                Tables\Columns\TextColumn::make('jenis.nama')->label('Jenis Kendaraan'),
            ])
            ->filters([
                // Tambahkan filter jika perlu
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


    public static function canViewAny(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'pegawai']);
    }

    public static function canView(Model $record): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'pegawai']);
    }

    public static function canCreate(): bool
    {
        return Auth::check() && Auth::user()->role === 'admin';
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::check() && Auth::user()->role === 'admin';
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::check() && Auth::user()->role === 'admin';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return Auth::check() && in_array(Auth::user()->role, ['admin', 'pegawai']);
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
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }
}
