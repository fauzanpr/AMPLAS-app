<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

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
}
