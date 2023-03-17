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
        'name', 'email', 'password', 'role', 'phone', 'address', 'city', 'state', 'zip_code', 'image', 'status', 'company_name', 'website', 'industry', 'contact', 'gender', 'job_type', 'located_in', 'relocate', 'work_type', 'industry_and_position', 'pay_range', 'nationality', 'questionaire_submit', 'resume',
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
    public function getImageAttribute()
    {
        if ($this->attributes['image'] == null || !$this->attributes['image']) {
            return asset('user/assets/images/profile-imges/default.png');
        } else {
            return asset('uploads/user') . '/' . $this->attributes['image'];
        }
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    // CHAT RELATIONS
    public function messages()
    {
        return $this->hasMany(Message::class, 'id', 'sender_id');
    }

    public function messagecomments()
    {
        return $this->hasMany(MessageComment::class, 'id', 'sender_id');
    }

    public function messagesender()
    {
        return $this->hasMany(Message::class, 'id', 'sender_id');
    }

    public function messagereceiver()
    {
        return $this->hasMany(Message::class, 'id', 'receiver_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function followers()
    {
        return $this->hasMany(Follower::class, 'company_id', 'id');
    }

    public function followingCompanies()
    {
        return $this->hasMany(Follower::class, 'user_id', 'id');
    }
    public function companyNotifications()
    {
        return $this->hasMany(Notification::class, 'userId', 'id');
    }
    public function save_freelancer_service()
    {
        return $this->hasMany(SaveService::class, 'service_id', 'id');
    }

    public function bookedServices()
    {
        return $this->hasMany(BookService::class, 'service_id', 'id');
    }

    // public function CompanySaveForLater()
    // {
    //     return $this->hasMany(CompanySaveForLater::class, 'saved_id', 'id');
    // }
}
