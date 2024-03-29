<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'address',
        'phone_no',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'phone_no' => 'integer',
    ];


    public function bookings()
    {
        return $this->hasMany(\App\Models\Bookings::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
