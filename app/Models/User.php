<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function personalData()
    {
        return $this->belongsTo(PersonalData::class, 'personal_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function cancellations()
    {
        return $this->hasMany(Cancellation::class);
    }

    public function payemnts()
    {
        return $this->hasMany(Payment::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
