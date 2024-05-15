<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ListFacilityTourismResource\Pages;
use App\Filament\Resources\ListFacilityTourismResource\RelationManagers;
use App\Models\list_facility_tourism;
use App\Models\ListFacilityTourism;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ListFacilityTourismResource extends Resource
{
    protected static ?string $model = list_facility_tourism::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListListFacilityTourisms::route('/'),
            'create' => Pages\CreateListFacilityTourism::route('/create'),
            'edit' => Pages\EditListFacilityTourism::route('/{record}/edit'),
        ];
    }
}
