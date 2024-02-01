<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use Session;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $currentUser= Auth::user();
        $stores = Store::where('user_id',$currentUser->id)->get();
        $user = User::findOrFail($currentUser->id);
        $stores = $user->store()->get();
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
     { $store = new Store();
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
        $store = Store::findOrFail($id);
        //$store = $store->get();
        $products = $store->product()->get();
    
        return view('Store.show', compact('store','products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $store = Store::findOrFail($id);
        
        return view('Store.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return dd($request->title);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required|max:255',
        ]);
        $store = Store::findOrFail($id);

        $store->update([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
        ]);
        $store = Store::findOrFail($id);
        $store->name = $request->title;
        $store->description = $request->description;
        $store->location = $request->location;
        $store->save();
        
        Session::flash('message',  $request->title." was successfully updated");
         return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = Store::findOrFail($id);
         
        echo "<h3>Are you sure you want to delete <code>". $store->name ."</code>?</h3>";
        // $store = Store::findOrFail($id);
        // $store->delete();
        // Session::flash('message', "Store ID ".$id." was successfully deleted");
        //  return redirect()->route('store.list');
    }
}
