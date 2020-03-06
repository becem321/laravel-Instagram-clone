<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['description', 'title', 'user_id', 'url'];

    protected $table = 'profiles';

    protected $guarded = [];

    public function profileImage() 
    {
        $imagePath = ($this->image) ? $this->image : "profile/K0T9tQa4Lcl5zOvpYio8Gvu9JKR7HdDqZrnaFaUH.png";
        return "/storage/" . $imagePath;
    }

    
    public function followers() {
        return $this->belongsToMany(User::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }

    
}
