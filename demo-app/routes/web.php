<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});


//another way to write same route function
// Route::get('/hello', function(){
//     return '<h1>Hello People</h1>';
// });
//another way to write same route function
// Route::view('/hello', 'hello'); //view('route-url','view-name')


// Route::get('/hello/baby', function () {
//     return view('baby');
// });

/*Route::get('/hello/{id?}', function (string $id = null) {    
// ? => optional
//     if ($id) {
//         return "<h1>Post ID:" . $id . "</h1>";

//     } else {
//         return "<h1>No ID Found</h1>";
//     }
// })->where('id', '@[0-9]+'); //using regular expression
*/
//using laravel named routes
// Route::get('/test', function () {
//     return view('about');
// })->name('about-pg');

//redirect function: if we change the whole url, then the saved pages(bookmarked) will not open as they don't exist so we use redirect function
// Route::redirect('/about', 'test', 301); // /1stparam: last-name, /2nd-param: new-name, 3rd-param: code to show chnage-status

//<----------#---------->
//Laravel Route Groups
// Route::prefix('page')->group(function () {
//     Route::get('/about', function () {
//         return "<h1>About Page</h1>";
//     });
//     Route::get('/gallery', function () {
//         return "<h1>Gallery Page</h1>";
//     });
//     Route::get('/hello', function () {
//         return "<h1>First Post Page</h1>";
//     });
// });


//<------------#------------->
//fallback(): it is used to display the page that doesn't exist. like, we can also make some view and we also return view
Route::fallback(function () {
    return "<h1>Page Not Found Bruh. Try Again!</h1>";
});