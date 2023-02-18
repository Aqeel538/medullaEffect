<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId', 'jobId', 'title', 'subject'
    ];

    public function companyGet()
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }
}
