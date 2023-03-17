<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'category_id', 'company_name', 'title', 'rate', 'job_type', 'city', 'state', 'zip_code', 'work_type', 'hiring_type', 'experience', 'short_description', 'description', 'status', 'image'
    ];

    public function Categories()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function Users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function applied_jobs()
    {
        return $this->hasMany(Application::class, 'job_id', 'id');
    }
    public function saved_jobs()
    {
        return $this->hasMany(SaveForLater::class, 'job_id', 'id');
    }

    public function archived_jobs()
    {
        return $this->hasMany(Archive::class, 'job_id', 'id');
    }
}
