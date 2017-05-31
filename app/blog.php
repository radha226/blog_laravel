<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'title','desc','img','status','category_id','userid',
    ];
   
  

     public function users(){
      return $this->belongsTo('App\User','userid','id');   
    }
     public function category(){
      return $this->hasOne('App\add_category','id','category_id');   
    }




//for comment


    // public function blogid(){
    //  return $this->belongsto('App\blog','blogid','id');
    // }

    
    public function userscomment(){
      return $this->hasMany('App\Comment','blogid','id');   
    }
      

  
}
