<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Store;
use App\Services\Store\StoreService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StoreController extends Controller
{
    public function __construct(
        protected StoreService $service
    ){}

    public function index()
    {
        $stores = $this->service->getAll();
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
        $this->service->delete($store);
        return redirect()->back();
    }
}
