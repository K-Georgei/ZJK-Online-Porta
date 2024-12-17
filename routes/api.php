<?php

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    $result = Room::select(["id","room_number","status","capacity"])
    ->withCount(["bookings" => function(Builder $query){
        $query->where("move_out",">", now())->orWhereNull("move_out");
        
    }])->get()->filter(fn($room) => $room->bookings_count < 3)->toArray();

    sort($result);
    return $result;

});

Route::post('/save-room', function (Request $request){
    $user = User::with("booking")->find($request->user_id);

    $hasRoom = Booking::where("room_id", $request->room["id"])->count() >= $request->room["capacity"];

    if ($hasRoom) {
        return 403;
    }

    $booking = new Booking([
        "room_id" => $request->room["id"],
        "move_in" => now(),
        "move_out" => null
    ]);

    $user->booking()->save($booking);

    return 200;

});