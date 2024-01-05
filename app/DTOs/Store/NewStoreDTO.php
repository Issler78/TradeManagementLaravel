<?php

namespace App\DTOs\Store;

use App\Http\Requests\StoreRequest;

class NewStoreDTO
{
    public function __construct(
        string $store_name,
        string $postal_code,
        string $status,
        string $user_id
    ){}

    static function makeFromRequest(StoreRequest $request): self
    {
        return new self(
            $request->store_name,
            $request->postal_code,
            $request->status,
            1
        );
    }
}
