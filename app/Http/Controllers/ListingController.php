<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function store(Request $request){
           //dd($request->all());

           $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }
}
