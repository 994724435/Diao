<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi',function(){ 
     // $title ="我爱你";
     $title = DB::table('admin')->get();
     print_r($title[1]);
   //  return  $title;      //直接输出  
  //  return view('demo')->with('title','123');   //利用blade输出	
});

//利用路由传参
Route::get('/hellow/{username?}',function($user="xiaoming"){
         return $user.'你好';
});//     ->before('login');  路由过滤器

Route::filter('login',function(){
	if(Session::get('loginId',0)==0){
		return  "请登录http://wwww.";
	}
});












