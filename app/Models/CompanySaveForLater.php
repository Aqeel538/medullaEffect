<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySaveForLater extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'saved_id',
    ];

    public function services()
    {
        return $this->hasOne(Service::class,  'id', 'saved_id');
    }
}
