<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_id',
        'status',
    ];

    public function getAppliedJobs()
    {
        return $this->hasOne(Job::class,  'id', 'job_id');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
