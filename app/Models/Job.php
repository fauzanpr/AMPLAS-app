<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }

    public function jobDetail()
    {
        return $this->hasOne(JobDetail::class);
    }

    public function cancellation()
    {
        return $this->hasOne(Cancellation::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
