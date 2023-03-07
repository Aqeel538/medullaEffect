<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;
    public function followedCompany()
    {
        return $this->hasOne(User::class, 'id', 'company_id');
    }
    public function companyNotifications()
    {
        return $this->hasMany(Notification::class, 'userId', 'company_id');
    }
}
