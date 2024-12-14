<?php

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return Room::select(["id","room_number","status","capacity"])
    ->withCount(["bookings" => function(Builder $query){
        $query->where("move_out",">", now())->whereNotNull("move_out");
        
    }])->get()->filter(fn($room) => $room->bookings_count < 3);
});

Route::post('/save-room', function (Request $request){
    $user = User::find($request->user_id);

    $booking = new Booking([
        "room_id" => $request->room["id"],
        "move_in" => now(),
        "move_out" => null
    ]);

    $user->booking()->save($booking);

    return 200;

});