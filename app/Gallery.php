<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Gallery extends Model
{
    protected $fillable = ['title'];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
