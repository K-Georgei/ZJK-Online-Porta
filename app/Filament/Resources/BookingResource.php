<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;
    protected static ?string $pluralModelLabel = "foglalások";
    protected static ?string $modelLabel = "foglalás";
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make("user_id")
                ->label("Felhasználó | Neptunkód")
                ->required()
                ->relationship("user", "id")
                ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->name} ({$record->neptun_code})")
                ->searchable()
                ->native(false)
                ->preload(),

                Select::make("room_id")
                ->label("Szoba")
                ->required()
                ->relationship("room", "id")
                ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->room_number}. szoba")
                ->searchable()
                ->native(false)
                ->preload(),

                DatePicker::make("move_in")->label("Beköltözés")
                    ->required()
                    ->native(false)
                    ->displayFormat("Y. m. d.")
                    ->suffixIcon("heroicon-o-calendar-days"),


                DatePicker::make("move_out")->label("Kiköltözés")
                    ->required()
                    ->native(false)
                    ->displayFormat("Y. m. d.")
                    ->suffixIcon("heroicon-o-calendar-days"),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('Név')
                    ->formatStateUsing(fn ($record) => "{$record->user->name} ({$record->user->neptun_code})"),
                TextColumn::make('room.room_number')->label('Szobaszám'),
                TextColumn::make('move_in')->label('Beköltözés'),
                TextColumn::make('move_out')->label('Kiköltözés'),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
