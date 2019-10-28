<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;


    const VERIFIED_USER = '1',
        UNVERIFIED_USER = '0',
        ADMIN_USER = 'true',
        REGULAR_USER = 'false';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'verified',
        'verification_token',
        'admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = ['deleted_at'];

    // user morph many images
    public function images() {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function isVerified() {
        return $this->verified == self::VERIFIED_USER;
    }

    public function isAdmin() {
        return $this->admin == self::ADMIN_USER;
    }

    public static function generateVerificationCode() {
        return Str::random(40);
    }
}
