<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all listing
    public function index(){
        //dd(request()->tag);
        return view('listings.index', [
            //'listings'=> Listing::all()
            //'listings'=> Listing::latest()->get()  // latest ta 1st e asba
            'listings'=> Listing::latest()->filter(request(['tag', 'search']))->get()  // latest ta 1st e asba

         ]);
    }
    //Show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create(){
        return view('listings.create');
    }
}
