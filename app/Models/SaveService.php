<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveService extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id',
    ];

    public function services()
    {
        return $this->hasOne(Service::class,  'id', 'service_id');
    }

    public function saved_freelancer()
    {
        return $this->hasOne(User::class, 'id', 'service_id');
    }
}
