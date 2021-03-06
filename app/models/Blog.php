<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    protected $table = 'blogs';

    protected $fillable = [

    	'title','content','user_id',

    ];

    public function user(){
    	
    	return $this->belongsTo('App\User','user_id');
    }

}
