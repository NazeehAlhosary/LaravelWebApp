<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name, it becomes by default as posts
    protected $table = 'posts';
    // Primary key
    public $primarykey = 'id';
    // Timestamps, it becomes true by default
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User'); 
    }
}
