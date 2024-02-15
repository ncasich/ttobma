<?php

namespace App\Models\User;

use App\Database\Eloquent\User as BaseUser;

class User extends BaseUser
{
    const LEVEL_READ = 1;
    const LEVEL_FULL = 2;

    protected $fillable = [
        'sf_contact_id',
        'phone_number',
        'secondary_phone',
        'position',
        'email',
        'password',
        'first_name',
        'last_name',
        'timezone',
        'security_level',
        'forecast_expert',
        'forecasting_opt_out',
        'product_preference'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getFullNameAttribute()
    {
        return implode(' ', [$this->first_name, $this->last_name]);
    }
}
