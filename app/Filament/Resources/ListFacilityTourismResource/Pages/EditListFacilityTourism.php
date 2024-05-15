<?php

namespace App\Filament\Resources\ListFacilityTourismResource\Pages;

use App\Filament\Resources\ListFacilityTourismResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditListFacilityTourism extends EditRecord
{
    protected static string $resource = ListFacilityTourismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
