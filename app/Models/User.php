<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'phone', 'address', 'image', 'status','company_name','website','industry','contact','gender','job_type','located_in','work_type','industry_and_position', 'pay_range', 'nationality','questionaire_submit'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getImageAttribute(){
        if ($this->attributes['image'] == null || !$this->attributes['image']) {
            return asset('user/Assets/Images/profile-imges/user-profile-default-image.png');
        }
        
        else{
            return asset('uploads/user').'/'. $this->attributes['image'];
        }
        
    }
}
