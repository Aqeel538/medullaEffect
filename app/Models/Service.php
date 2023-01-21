<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','category_id','title', 'rate','discription','image'
    ];

    public function Categories()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function Users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getImageAttribute(){
        return asset('uploads/ServiceImages').'/'. $this->attributes['image'];
    }
}
