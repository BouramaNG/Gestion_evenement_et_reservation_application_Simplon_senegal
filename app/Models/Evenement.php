<?php

namespace App\Models;

use App\Models\Association;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;


    protected $fillable = [
        'association_id', 'name', 'date', 'location', 'description', 'registration_deadline', 'total_seats',
    ];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
