<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_id'
    ];

    public function getjob()
    {
        return $this->hasOne(Job::class,  'id', 'job_id');
    }

    public function getApplication()
    {
        return $this->hasOne(Application::class,  'id', 'job_id');
    }
}
