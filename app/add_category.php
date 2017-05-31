<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_category extends Model
{
    protected $fillable = [
        'category',
    ];
    protected $hidden = [
         'remember_token',
    ];


    
    protected $table = 'category_add';

  // public function category(){
  //     return $this->hasOne('App\blog');   
  //   }
    public static function categorylist(){
    	return self::orderBy('id')->pluck('category','id');
    }
    
}
