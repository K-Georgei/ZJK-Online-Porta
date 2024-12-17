<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Livewire\Attributes\On;

class Booking extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = "Foglalás";
    protected static string $view = 'filament.pages.booking';


    #[On("booking-created")]
    public function bookingCreated()
    {
        return redirect()->route("filament.admin.pages.dashboard");
    }

    public static function canAccess(): bool
    {
        $user = auth()->user();
        return $user->keresztnev && !auth()->user()->booking;
        //TODO mezők vizsgálata

    }


}
