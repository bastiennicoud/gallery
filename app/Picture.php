<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gallery;

class Picture extends Model
{
    protected $fillable = ['title', 'path'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
