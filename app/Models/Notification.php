<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Notification extends Model
{
    protected $fillable = ['title', 'ticket_price', 'start_time', 'end_time', 'descriptions'];
    public function bookings() : HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
