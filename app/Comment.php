<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  
    protected $fillable = [
       'message','status','userid','blogid',
    ];
    

    // public function usercomment(){
    // 	return $this->hasMany('App\user','id','usercommentid');
    // }
    
  // public function user(){
  //     return $this->belongsTo('App\User','usercommentid','id');
  //   }
}
