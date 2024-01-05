<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
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

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = 1;

        Store::create($data);
        return redirect()->back();
    }

    public function update(StoreRequest $request, string $store)
    {
        $data = $request->validated();

        Store::findOrFail($store)->update($data);
        return redirect()->back();
    }

    public function destroy(string $store)
    {
        Store::findOrFail($store)->delete();
        return redirect()->back();
    }
}
