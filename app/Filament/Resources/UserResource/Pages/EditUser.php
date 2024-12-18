<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        if(auth()->user()->hasRole("user"))
        {
            return [];
        }
        
        return [
            Actions\DeleteAction::make(),
        ];
    }


    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data["neptun_code"] = strtolower( $data["neptun_code"]);
        return $data;
    }

    protected function authorizeAccess(): void
    {
        abort_unless($this->getRecord()->id == auth()->id() || !auth()->user()->hasRole("user"), 403);
    }

}