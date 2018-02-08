<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Picture;

class Gallery extends Model
{
    protected $fillable = ['title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
