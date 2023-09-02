<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User','userid')->select(['id', 'name',]); //Create relation to display what it belongs from the posts table by selecting
    }

}
