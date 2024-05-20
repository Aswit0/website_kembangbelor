<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\event;
use App\Models\wisata;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        $tourismLocations = wisata::pluck('name', 'id');
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('title')->label('Judul'),
                    Textarea::make('description')->label('Deskripsi'),
                    TextInput::make('event_needed')->label('Kebutuhan Event'),
                    Select::make('location')->label('Lokasi')
                    ->options($tourismLocations),                    
                    FileUpload::make('poster_url')->required()->label('Gambar')->directory('event'),
                    Toggle::make('is_open')->label('Terbuka'),                
                    DatePicker::make('event_started')->label('Event Dimulai'),
                ])
                    ->columns(1),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('wisata.name')->label('Lokasi'),
                ImageColumn::make('poster_url')->label('Gambar')->sortable()->searchable(),
                TextColumn::make('title')->label('Event')->sortable()->searchable(),
                TextColumn::make('description')->label('Deskripsi')->limit(30)->sortable()->searchable(),
                TextColumn::make('event_needed')->label('Kebutuhan Event'),
                TextColumn::make('event_started')->label('Event Dimulai')->sortable()->searchable(),
                ToggleColumn::make('is_open')->label('Terbuka'),                
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
