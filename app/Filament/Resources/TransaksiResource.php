<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiResource\Pages;
use App\Filament\Resources\TransaksiResource\RelationManagers;
use App\Models\Transaksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-receipt-percent';

    public static function getModelLabel(): string
    {
        return 'Transaksi';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Transaksi';
    }

    public static function getNavigationLabel(): string
    {
        return 'Transaksi';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal')->required(),
                Forms\Components\TimePicker::make('mulai')->required(),
                Forms\Components\TimePicker::make('akhir')->required(),
                Forms\Components\TextInput::make('biaya')->numeric()->required(),
                Forms\Components\Textarea::make('keterangan')->maxLength(100)->columnSpanFull(),
                Forms\Components\Select::make('kendaraan_id')
                    ->label('Merk Kendaraan')
                    ->relationship('kendaraan', 'merk')
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('areaparkir_id')
                    ->label('Area Parkir')
                    ->relationship('areaparkir', 'nama')
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mulai')
                    ->time()
                    ->sortable(),
                Tables\Columns\TextColumn::make('akhir')
                    ->time()
                    ->sortable(),
                Tables\Columns\TextColumn::make('biaya')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('keterangan')
                    ->limit(50)
                    ->sortable(),
                Tables\Columns\TextColumn::make('kendaraan.merk')
                    ->label('Kendaraan')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('areaparkir.nama')
                    ->label('Area Parkir')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                // Optional filter
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function canViewAny(): bool
    {
        return Auth::check();
    }

    public static function canView(Model $record): bool
    {
        return Auth::check();
    }

    public static function canCreate(): bool
    {
        return Auth::check();
    }

    public static function canEdit(Model $record): bool
    {
        return Auth::check();
    }

    public static function canDelete(Model $record): bool
    {
        return Auth::check() && Auth::user()->role === 'Admin';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return Auth::check();
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
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
