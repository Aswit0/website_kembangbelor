<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\wisata;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\WisataResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WisataResource\RelationManagers;

class WisataResource extends Resource
{
    protected static ?string $model = Wisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->label('Nama Wisata'),
                TextInput::make('desc')->required()->label('Deskripsi'),
                TextInput::make('htm')->required()->label('Tiket Masuk'),
                TextInput::make('whatsapp')->required()->label('Nomor'),
                TextInput::make('maps')->required()->label('Maps'),
                TextInput::make('mapsView')->required()->label('Tampilan Maps'),
                TimePicker::make('jamBuka')->required()->label('Jam Buka'),
                TimePicker::make('jamTutup')->required()->label('Jam Tutup'),
                FileUpload::make('imageUrl')->required()->label('Gambar')->directory('wisata'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama Wisata')->sortable()->searchable(),
                TextColumn::make('desc')->label('Deskripsi')->limit(30),
                TextColumn::make('htm')->label('Tiket Masuk'),
                ImageColumn::make('imageUrl')->label('Gambar'),
                TextColumn::make('whatsapp')->label('Nomor'),
                TextColumn::make('maps')->label('Maps')->limit(10),
                TextColumn::make('jamBuka')->label('Jam Buka'),
                TextColumn::make('jamTutup')->label('Jam Tutup'),
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
            'index' => Pages\ListWisatas::route('/'),
            'create' => Pages\CreateWisata::route('/create'),
            'edit' => Pages\EditWisata::route('/{record}/edit'),
        ];
    }
}
