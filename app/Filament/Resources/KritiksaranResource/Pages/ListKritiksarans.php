<?php

namespace App\Filament\Resources\KritiksaranResource\Pages;

use App\Filament\Resources\KritiksaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKritiksarans extends ListRecords
{
    protected static string $resource = KritiksaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
