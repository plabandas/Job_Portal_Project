<?php

use App\Models\Listing;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

//All Listings
Route::get('/', [ListingController::class,'index'] );


//Show create form
Route::get('/listings/create', [ListingController::class, 'create'] )->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'] )->middleware('auth');

//Show Edit Form  // Bracket er moddar variable muloto edit function er variable
Route::get('/listings/{my_listing}/edit', [ListingController::class,'edit'] )->middleware('auth');

//Edit Submit to Update
Route::put('/listings/{listing}', [ListingController::class,'update'] )->middleware('auth');

//Delete lisitng
Route::delete('/listings/{listing}', [ListingController::class,'destroy'] )->middleware('auth');

// Show Register/Create Form
Route::get('/register', [UserController::class,'create'] )->middleware('guest');;

// Create New User
Route::post('/users', [UserController::class,'store'] );

// Log User Out
Route::post('/logout', [UserController::class, 'logout'] )->middleware('auth');

// Show login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

//Log In User
Route::post('/users/authenticate', [UserController::class,'authenticate'] );





// //Single Listing
// Route::get('/listings/{id}', function($id){
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });

//Single Listing   // eta {listing} and $listing match korabe; jodi na pai taila by default 404 error diba
Route::get('/listings/{listing}', [ListingController::class,'show'] );  // eta bottom e rakhte hoba

Route::get('/hello', function () {
    return "Bangla";
});

Route::get('/posts/{id}', function($id){
    return response('Post' . $id);
});

Route::get('/search', function(Request $request) {
 dd($request);
});

