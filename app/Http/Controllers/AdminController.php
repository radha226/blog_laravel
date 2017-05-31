<?php

namespace App\Http\Controllers;
use App\Auth;
use Illuminate\Http\Request;
use App\User;
use App\blog;
use Session;
use App\Comment;

class AdminController extends Controller
{
    public function bloglist_edit($id){
    	$model=blog::find($id);
    	return view('admin_view.pages.admin_listing_edit',['model'=>$model]);
    }
    public function bloglist_update(request $request,$id){   

    	$model=blog::find($id);
         // $file = Request::file('img');
        // dd( $file->file('img')->getClientOriginalName());   
        $request->file('img')->move('images', $request->file('img')->getClientOriginalName());
       // $file->move('images', $request->file('img')->getClientOriginalName());
    	$model->fill($request->except('_token'));
         $model->img=$request->file('img')->getClientOriginalName();
    	$model->save();
        // Session::flash('add','Blog Edit Successfully !!');
    	return redirect('blog_listing');
    }
    public function bloglist_delete($id){
    	$model=blog::find($id);
    	$model->delete();
    	return redirect('blog_listing');
    }
    public function commentlistingedit($id){
        $model=Comment::find($id);
        return view('admin_view.pages.comment_listing_edit',['model'=>$model]);
    }
    public function commentlistingupdate(request $request, $id){
        $model=Comment::find($id);
        $model->fill($request->except('_token'));
        $model->save();
        Session::flash('insert','inserted successfully!');
        return redirect('comment_listing');
    }
    public function commentlistingdelete($id){
        $model=Comment::find($id);
        $model->delete();
        Session::flash('insert','inserted successfully!');
        return redirect('comment_listing');
    }
}

