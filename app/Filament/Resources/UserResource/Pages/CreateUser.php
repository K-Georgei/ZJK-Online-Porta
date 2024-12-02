<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;



    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data["neptun_code"] = strtolower( $data["neptun_code"]);

        return $data;
    }


    protected function handleRecordCreation(array $data): Model
    {
        $record = parent::handleRecordCreation($data);
        $record->assignRole(['super_admin']); //TODO ne admin legyen
        return $record;
    }


}
