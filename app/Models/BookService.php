<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookService extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id'
    ];

    public function getBookedService()
    {
        return $this->hasOne(Service::class,  'id', 'service_id');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'applicant_id');
    }
}
