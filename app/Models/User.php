<?php

namespace App\Models;

use App\Models\Users\Plan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'picture',
        'email',
        'password',
        'last_online',
        'verification_code',
        'new_email',
        'status',
        'first',
        'last_accept_date',
        'created',
        'modified',
        'company_contact',
        'credits',
        'first_trip',
        'incomplete_profile',
        'phone_verify',
        'token_auto_login',
        'user_vertical',
        'language_id',
        'no_registered',
    ];

    const CREATED_AT = 'created';

    const UPDATED_AT = 'modified';
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function plan()
    {
        return $this->hasOne(Plan::class,'user_id', 'id');
    }

}
