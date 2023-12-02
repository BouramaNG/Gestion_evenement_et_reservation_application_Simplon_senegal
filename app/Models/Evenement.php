<?php

namespace App\Models;

use App\Models\User;
use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function isCancelable()
{
   
    return now()->diffInDays($this->date_evenement) > 3;
}
}
