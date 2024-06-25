<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;
 use App\Http\Controllers\RegistrationController;
    use App\Models\Customer;
// use App\Http\Controllers\Basiccontroller;
// use App\Http\Controllers\SingleActionController;
// use App\Http\Controllers\ResourceController;

// registration form route
Route::get('/',function(){
        return view('index');
});
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'registration']);

// for storing the form data in the database    
            //url route                                                            //name route
        
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::get('customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::get('customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
//for updating the form
Route::post('customer/view/update/{id}',[CustomerController::class,'update'])->name('customer.update');
Route::get('/customer/view',[CustomerController::class,'view']);
//for first time user submitting the form
Route::post('/customers',[CustomerController::class,'customer']);       



Route::get('/custom',function(){
        $customers=Customer::all();
        echo"<pre>";
        print_r($customers->toArray()); 
        

});


//     // Route::get('/',[Basiccontroller::class,'index']);
//     Route::get('/about',['app\Http\Controllers\Basiccontroller@about']);

//     Route::get('/course',SingleActionController::class); 

//         Route::resource('/resource',ResourceController::class);


// // GROUP Route in this multiple route grouping
// Route::prefix('page')->group(function(){
//     Route::get('/',function(){
//         return view('page');
//      });
//      Route::get('/about',function(){
//         return'the about page';
//      });
//      Route::get('/button',function(){
//         return'the button clicking  page';
//      });
    
// });
// // redirect from home 1 to page
// Route::redirect('/home1', '/page');


// // if not any route page than it display
// // using a fallback
//     Route::fallback(function(){
//         return '<h1>this page is not avilable please check home page</h1>';
//     });

  
// Route::get('home/{name?}',function($name=null){
//     $demo="<h1>heading line 1</h1>";
//     $data=compact('name','demo');
//     return view('home')->with($data); 
// });

    // Route::get('/',function (){
    //     return view('home1');
    // });
   
    // Route::get('/about',function (){
    //     return view('about');
    // });

    // Route::get('/course',function(){
    //     return view('course');
    // });
// Route::get('/demo', [UserController::class, 'index']);


// Route:redirect('/home','demo');


// this is for route example

// Route::get('/welcome/{name}/{id}',function($name,$id){
//      $data=compact('name','id');
//     return view('welcome')->with($data);
//     // return view('welcome')->with($name,$id);
// });


//compact for converting an afrray and imploode for converting an string

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
