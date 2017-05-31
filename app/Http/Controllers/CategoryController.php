<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\add_category;
use Session;

class CategoryController extends Controller
{
    public function category(Request $request ){

    	$model = new add_category;
        
    	$model->fill($request->except('_token'));
         $model->save();
         Session::flash('insert','Inserted successfully!');
         return redirect ('categories');

            //Session::flash('insert','inserted successfully!');
         	//dd('Insert Record successfully.');
         	
		  
    }
    
}
