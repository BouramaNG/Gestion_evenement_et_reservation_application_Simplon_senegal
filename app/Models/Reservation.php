<?php

namespace App\Models;

use App\Models\User;
use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;



    protected $fillable = [
        'event_id', 'user_id', 'seats_reserved', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Evenement::class);
    }
}
