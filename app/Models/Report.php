<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function reportType()
    {
        return $this->belongsTo(ReportType::class, 'type_id');
    }

    public function reportedAccount()
    {
        return $this->belongsTo(Account::class, 'reported_account');
    }

    public function reporterAccount()
    {
        return $this->belongsTo(Account::class, 'reporter_account');
    }
}
