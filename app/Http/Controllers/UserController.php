<?php

namespace App\Http\Controllers;
use App\Auth;
use Illuminate\Http\Request;
use App\User;
use App\blog;
use App\Comment;
use App\add_category;
 use App\Mail\Blogposting;
 use Session;
use MyCustomClass;
class UserController extends Controller
{
    public function profileview($id){
    	
    	echo $id;
    	// $user = Auth::user();
    	// echo $user;
    	
    	return view('admin_view.pages.profile');
    }
    public function profileedit($id){
    	$model=User::find($id);
    	//echo $model;
    	return view('admin_view.pages.profile_edit',['model'=>$model]);

    }
    public function profileupdate(request $request, $id){
    	$model=User::find($id);
    	$model->fill($request->except('_token'));
    	$model->save();
         Session::flash('insert','Updated successfully!');
     return redirect('profile');

    }
    public function bloghtml(){
    	$plugins = [
    			'js' => ['ckeditor']
    	];

    	return view('admin_view.pages.add_blog_user',$plugins);
    }
    public function addblog(request $request){
    	// dd($request->file('img')->getClientOriginalExtension());
    		// $request->file('img')->move('images','mynewFile.'.$request->file('img')->getClientOriginalName());
    		// dd($request->file('img')->move('images', $request->file('img')->getClientOriginalName()));
    	$request->file('img')->move('images', $request->file('img')->getClientOriginalName());
    		
    		$model=new blog();
    		$model->status=0;

    		 $model->fill($request->except('token'));
    		 $model->img=$request->file('img')->getClientOriginalName();
    		$model->save();
              Session::flash('insert','Blog added');
    		return redirect ('blog');

    }
    public function adminbloghtml(){
    	$plugins = [
    			'js' => ['ckeditor']
    	];
    	return view('admin_view.pages.add_blog_admin',$plugins);
    }
    public function adminaddblog(request $request){
    	$request->file('img')->move('images', $request->file('img')->getClientOriginalName());
    		
    		$model=new blog();
    		$model->status=1;
    		 $model->fill($request->except('token'));
    		 $model->img=$request->file('img')->getClientOriginalName();
    		$model->save();
              Session::flash('insert','Blog added');
    		return redirect ('adminblog');

    }
    public function homeblog(){
    	//dd(MyCustomClass::testing());
    	  //$data=blog::all()->where('status',1);
   $data=blog::with('users','category')->get()->where('status',1);
 // dd($data);
    	return view('pages.index')->with('data',$data);
    }

    public function bloglisting(){
    	$list=blog::where('status','0')->get();
    	return view('admin_view.pages.blog_listing')->with('list',$list);
   
    }
    
    public function single_blog($id){
    	$model=blog::with(['userscomment'=>function($query){
            $query->where('status',1);
        },'users'])->where(['id'=>$id])->first();

        //dd($model);
        return view('pages.single_blog',['model'=>$model]);
        
    }
    public function comment_user(){
         $listing=Comment::where('userid', \Auth::user()->id)->get();
      return view('admin_view.pages.comment_user')->with('listing',$listing);;
    }
    public function adminblogstatus($id){
    	$list=blog::where('id',$id)->update(['status'=>'1']);
    	return redirect('blog_listing');
    }
    public function commentsubmit(request $request){
    	$comment=new Comment();
        //dd($comment);
    	// $comment->usercommentid=Auth::user()->id;
        $comment->status=0;
    	$comment->fill($request->except('token'));
    	$comment->save();
    	return redirect('/');
    }
    public function admincommentstatus($id){
            $list=Comment::where('id',$id)->update(['status'=>'1']);
        return redirect('comment_listing');
    }

    
    
    public function commentlisting(){
    		 $listing=Comment::all()->where('status','0');
    	return view('admin_view.pages.comment_listing')->with('listing',$listing);
    }

   }