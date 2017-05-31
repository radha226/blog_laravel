<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::group(['middleware'=>'auth'],function(){

// 	Route::get('/', function () {
// 	    return view('pages.index');
// 	});
// 	Route::get('about', function () {
// 	    return view('pages.about');
// 	});
// 	Route::get('contact', function () {
// 	    return view('pages.contact');
// 	});
// 	Route::get('single_post', function () {
// 	    return view('pages.single_blog');
// 	});
// });

	// Route::get('/', function () {
	//     return view('pages.index');
	// });
	Route::get('about', function () {
	    return view('pages.about');
	});
	Route::get('contact', function () {
	    return view('pages.contact');
	});
	
	Route::get('single_post/{id}',['as'=>'single_blog','uses'=>'UserController@single_blog']);

	Route::get('login', function () {
	    return view('pages.index');
	});
	Route::get('register', function () {
	    return view('pages.index');
	});

	Route::get('/admin', function () {
		$plugins = [
				'js' => ['jvectormap','gdp-data','flot','animateNumber','sparkline','skycons','main'],
				'css'	=> []
		];
	    return view('admin_view.pages.dashboard',$plugins);

	});
	Route::Post('profile/edit/{id}',['as'=>'profile/edit','uses'=>'UserController@profileedit']);
	Route::patch('profile/update/{id}',['as'=>'profile/update','uses'=>'UserController@profileupdate']);
	Route::post('profile/store',['as'=>'store.profile','uses'=>'UserController@profilsubmit']);
	
 	Route::get('profile', function () {
     return view('admin_view.pages.profile');
	 });
 	Route::get('categories', function () {
     return view('admin_view.pages.add_category_admin');
	 });
 	Route::post('category/store',['as'=>'store.category','uses'=>'CategoryController@category']);
 	
 	// Blog routes
 	Route::get('blog',['as'=>'blog', 'uses'=>'UserController@bloghtml']);
 	Route::post('blog/submit',['as'=>'blog.submit', 'uses'=>'UserController@addblog']);
 	Route::get('adminblog',['as'=>'blog', 'uses'=>'UserController@adminbloghtml']);
 	Route::post('adminblog/submit',['as'=>'adminblog.submit', 'uses'=>'UserController@adminaddblog']);
 	Route::get('blog_status/submit/{id}',['as'=>'blog_status.submit', 'uses'=>'UserController@adminblogstatus']);

 	//admin blog listing
 	Route::get('blog_listing',['as'=>'blog_listing','uses'=>'UserController@bloglisting']);
 	Route::get('blog_listing/edit/{id}',['as'=>'blog_listing/edit', 'uses'=>'AdminController@bloglist_edit']);
 	Route::patch('blog_listing/update/{id}',['as'=>'blog_listing/update','uses'=>'AdminController@bloglist_update']);
 	Route::get('blog_listing/delete/{id}',['as'=>'blog_listing/delete','uses'=>'AdminController@bloglist_delete']);

 	// front end home page
 	Route::get('/',['as'=>'home', 'uses'=>'UserController@homeblog']);

 	//comment front end page
 	
 	Route::post('comment/submit',['as'=>'comment.submit', 'uses'=>'UserController@commentsubmit']);
 	Route::get('comment_listing',['as'=>'comment_listing','uses'=>'UserController@commentlisting']);
 	Route::get('comment_listing/edit/{id}',['as'=>'comment_listing/edit','uses'=>'AdminController@commentlistingedit']);
 	Route::get('comment_listing/delete/{id}',['as'=>'comment_listing/delete','uses'=>'AdminController@commentlistingdelete']);
 	
 	Route::patch('comment_listing/update/{id}',['as'=>'comment_listing/update','uses'=>'AdminController@commentlistingupdate']);
 	//Route::post('comment/submit',['as'=>'comment/route','uses'=>'userController@commentsubmit']);

 	//comment backend
 	Route::get('comment_status/submit/{id}',['as'=>'blog_status.submit', 'uses'=>'UserController@admincommentstatus']);
 	Route::get('comment_user',['as'=>'comment_user','uses'=>'UserController@comment_user']);

Route::post('registeruser',['as'=>'registeruser','uses'=>'Auth\RegisterController@registeruser']);
Route::get('logout','Auth\LoginController@logout');
Auth::routes();

// Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('/home', 'HomeController@index')->name('home');
