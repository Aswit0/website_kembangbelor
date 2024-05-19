<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\kritiksaran;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KritiksaranResource\Pages;
use App\Filament\Resources\KritiksaranResource\RelationManagers;

class KritiksaranResource extends Resource
{
    protected static ?string $model = Kritiksaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama')->required()->label('Nama'),
                        TextInput::make('email')->required()->label('Email'),
                        Select::make('tujuan')->required()->label('Tujuan')
                            ->options([
                                'pertanyaan' => 'Pertanyaan',
                                'kritiksaran' => 'Kritik dan Saran',
                            ]),
                        TextInput::make('pesan')->required()->label('Pesan'),


                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('tujuan')->sortable()->searchable(),
                TextColumn::make('pesan')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListKritiksarans::route('/'),
            'edit' => Pages\EditKritiksaran::route('/{record}/edit'),
        ];
    }
}
