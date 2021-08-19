<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        "package",
        "pck_start",
        "pck_end",
        "phone",
        "lang",
        "img",
        "role_id"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public const IS_YEARLY = 1;
    public const IS_THREE_MONTH = 2;
    public const IS_MONTHLY = 3;
    public const IS_ADMIN = 1;
    public const IS_User = 2;
    public const IS_EDITOR = 3;

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function role()
    {
        return $this->belongsTo(roles::class);
    }
}
