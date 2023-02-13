<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'applicant_id',
        'job_id'
    ];

    public function getAppliedJobs()
    {
        return $this->hasOne(Job::class,  'id', 'job_id');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'applicant_id');
    }
}
