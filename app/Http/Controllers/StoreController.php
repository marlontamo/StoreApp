<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storemodel;
use Session;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Storemodel::all();
        return view('Store.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Store.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     { $store = new Storemodel();
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'location' => 'required|max:255',
        ]);
         $store->name = $request->title;
         $store->description = $request->description;
         $store->location = $request->location;
         $store->user_id = $request->userId;
         $store->save();
    
         Session::flash('message', "Store was successfully created");
         return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Store.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Store.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "Update Store data";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "Delete single Store";
    }
}
