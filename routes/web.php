<?php

use Illuminate\Support\Facades\Route;
    //compact for converting an afrray and imploode for converting an string

// Route::get('home/{name?}',function($name=null){
//     $demo="<h1>heading line 1</h1>";
//     $data=compact('name','demo');
//     return view('home')->with($data); 
// });

    Route::get('/',function (){
        return view('home1');
    });
   
    Route::get('/about',function (){
        return view('about');
    });

    Route::get('/course',function(){
        return view('course');
    });
// Route::get('/demo', [UserController::class, 'index']);


// Route:redirect('/home','demo');


// this is for route example

// Route::get('/welcome/{name}/{id}',function($name,$id){
//      $data=compact('name','id');
//     return view('welcome')->with($data);
//     // return view('welcome')->with($name,$id);
// });

// Route::get('/welcome', function ($name,$id) {
//     $data=compact('name','id');
//     return view('welcome')->with($data);
// });

// Route::get ('/demo/{name}/{id?}',function($name,$id=null){
//     $data=compact('name','id'); //it converts array
// //    $data2= implode($data);   //it converts array in to the string 
//     print_r($data) ;
//         var_dump($data);
//     });














// Route::get('/demo',function(){
//     return view('demo');
// });


// Route::post('/test',function(){
//     echo "echo a driving car";
// });

// Route::put('/user{id},function($id)'{
// });

// Route::patch();

// Route::delete('users/{id}',function($id){
// });