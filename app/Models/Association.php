<?php

namespace App\Models;

use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Association extends Model
{
    use HasFactory;


    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
