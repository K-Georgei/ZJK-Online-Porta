<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static bool $shouldRegisterNavigation = false;
    protected static ?string $model = User::class;
    protected static ?string $pluralModelLabel = "felhasználók";
    protected static ?string $modelLabel = "felhasználó";
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->label('Email cím')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->email(),

                TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn($state) => Hash::make($state))
                    ->dehydrated(fn($state) => filled($state)),

                TextInput::make('first_name')
                    ->label('Keresztnév')
                    ->required(),

                TextInput::make('last_name')
                    ->label('Vezetéknév')
                    ->required(),

                Select::make('gender')
                    ->label('Nem')
                    ->options([
                        '1' => 'Férfi',
                        '2' => 'Nő',
                    ])
                    ->required(),

                TextInput::make('phone')
                    ->label('Telefonszám')
                    ->mask('+99/99 999-9999')
                    ->required(),

                TextInput::make('neptun_code')
                    ->label('Neptun kód')
                    ->required(),

                DatePicker::make('birth_date')
                    ->label('Születési dátum')
                    ->required()
                    ->native(false)
                    ->displayFormat("Y. m. d.")
                    ->suffixIcon("heroicon-o-calendar-days"),

                TextInput::make('birthplace')
                    ->label('Születési hely')
                    ->required(),

                TextInput::make('mothers_name')
                    ->label('Anyja neve')
                    ->required(),

                TextInput::make('address')
                    ->label('Cím')
                    ->required(),

                Select::make('country_id')
                    ->label('Ország')
                    ->required()
                    ->relationship('country', 'name')
                    ->searchable()
                    ->native(false)
                    ->preload(),

                TextInput::make('personal_number')
                    ->label('Személyi szám')
                    ->required(),

                FileUpload::make('profile_picture')
                    ->label('Profilkép')
                    ->disk('public')
                    ->directory('Profile-pictures')
                    ->avatar()
                    ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')->label('Név')
                    ->formatStateUsing(fn($record) => "{$record->name} (" . ($record->neptun_code === null ? "Nincs kitöltve" : $record->neptun_code) . ")"),

                TextColumn::make('email')->label('Email'),

                TextColumn::make('phone')->label('Mobilszám'),

                TextColumn::make('birth_date')->label('Születési dátum')
                    ->formatStateUsing(fn($record) => Carbon::parse($record->birth_date)->translatedFormat("Y.m.d.")),

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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        if (auth()->user()->hasRole("user")) {
            return "Felhasználó";
        }
        return static::$navigationLabel ?? static::getTitleCasePluralModelLabel();
    }
}
