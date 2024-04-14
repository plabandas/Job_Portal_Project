<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//All Listings
Route::get('/', [ListingController::class,'index'] );

// //Single Listing
// Route::get('/listings/{id}', function($id){
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });

//Single Listing   // eta {listing} and $listing match korabe; jodi na pai taila by default 404 error diba
Route::get('/listings/{listing}', [ListingController::class,'show'] );

Route::get('/hello', function () {
    return "Bangla";
});

Route::get('/posts/{id}', function($id){
    return response('Post' . $id);
});

Route::get('/search', function(Request $request) {
 dd($request);
});

