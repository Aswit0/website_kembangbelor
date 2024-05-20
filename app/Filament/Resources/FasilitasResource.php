<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\wisata;
use Filament\Forms\Form;
use App\Models\fasilitas;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FasilitasResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FasilitasResource\RelationManagers;

class FasilitasResource extends Resource
{
    protected static ?string $model = fasilitas::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    public static function form(Form $form): Form
    {
        $tourismLocations = wisata::pluck('name', 'id');
        return $form
            ->schema([
                Select::make('parentTourism')->label('Lokasi')
                    ->options($tourismLocations),
                TextInput::make('facilityName')->label('Fasilitas'),
                FileUpload::make('immersive_picture')->directory('fasilitas')->label('Gambar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('wisata.name')->label('Lokasi'),
                TextColumn::make('facilityName')->label('Fasilitas'),
                ImageColumn::make('immersive_picture')->label('Gambar'),
                TextColumn::make('created_at')->label('Dibuat pada'),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListFasilitas::route('/'),
            'create' => Pages\CreateFasilitas::route('/create'),
            'edit' => Pages\EditFasilitas::route('/{record}/edit'),
        ];
    }
}
