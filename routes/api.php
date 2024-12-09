<?php

use App\Models\Room;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return Room::select(["id","room_number","status","capacity"])
    ->withCount(["bookings" => function(Builder $query){
        $query->where("move_out",">", now());
        
    }])->get()->filter(fn($room) => $room->bookings_count < 3);
});
