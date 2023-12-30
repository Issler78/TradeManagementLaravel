<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('app.stores.stores', compact('stores'));
    }

    public function store(Request $request)
    {
        $request['user_id'] = 1;
        $request->validate([
            'store_name' => 'required|min:3|max:255',
            'postal_code' => 'required|digits:8|unique:stores,postal_code',
            'status' => 'required|in:A,I'
        ]);

        Store::create($request->all());
        return redirect()->back();
    }
}
