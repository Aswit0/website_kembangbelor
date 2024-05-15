<?php

namespace App\Filament\Resources\ListFacilityTourismResource\Pages;

use App\Filament\Resources\ListFacilityTourismResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListFacilityTourisms extends ListRecords
{
    protected static string $resource = ListFacilityTourismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
