<?php

use Illuminate\Support\Facades\Route;


Route::get('home/{name?}',function($name=null){
    $demo="<h1>heading line 1</h1>";
    $data=compact('name','demo');
    return view('home')->with($data); 
});


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



    // Route::get('/demo',function (){
    //     return view('demo');
    // });











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