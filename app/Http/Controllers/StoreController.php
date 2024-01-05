<?php

namespace App\Http\Controllers;

use App\DTOs\Store\NewStoreDTO;
use App\DTOs\Store\UpdateStoreDTO;
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
        // $stores = $this->service->getAll();
        $stores = Store::all();
        return view('app.stores.stores', compact('stores'));
    }

    public function store(StoreRequest $request)
    {
        $this->service->new(
            NewStoreDTO::makeFromRequest($request)
        );

        return redirect()->back();
    }

    public function update(StoreRequest $request)
    {
        $this->service->update(
            UpdateStoreDTO::makeFromRequest($request)
        );

        return redirect()->back();
    }

    public function destroy(string $store)
    {
        $this->service->delete($store);
        return redirect()->back();
    }
}
