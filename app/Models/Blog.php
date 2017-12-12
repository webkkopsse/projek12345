<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title','slug','content','featured_img','user_id','status'
    ];

    public function user(){
      return $this->belongsTo('App\Models\User');
    }
}
