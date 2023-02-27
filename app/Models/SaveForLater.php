<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveForLater extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_id',
    ];

    public function savedJobs()
    {
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
}
