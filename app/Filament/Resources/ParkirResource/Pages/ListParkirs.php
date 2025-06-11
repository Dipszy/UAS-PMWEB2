<?php

namespace App\Filament\Resources\ParkirResource\Pages;

use App\Filament\Resources\ParkirResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParkirs extends ListRecords
{
    protected static string $resource = ParkirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
