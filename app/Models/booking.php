<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id',
        'addon_id',
        'pickup_location',
        'pickup_date',
        'pickup_time',
        'dropoff_location',
        'dropoff_date',
        'dropoff_time',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member_id' => 'integer',
        'addon_id' => 'integer',
        'pickup_date' => 'date',
        'dropoff_date' => 'date',
    ];


    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class);
    }

    public function addon()
    {
        return $this->belongsTo(\App\Models\Addon::class);
    }
}
