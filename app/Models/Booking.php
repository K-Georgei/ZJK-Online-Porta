<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    protected $with = ["users","rooms"];

    /**
     * Get the user associated with the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,"bookings","id");
    }

    /**
     * Get the room associated with the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class,"bookings","id");
    }
}
