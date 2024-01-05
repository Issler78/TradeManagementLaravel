<?php

namespace App\DTOs\Store;

use App\Http\Requests\StoreRequest;

class UpdateStoreDTO
{
    public function __construct(
        string $id,
        string $store_name,
        string $postal_code,
        string $status,
        string $user_id
    ){}

    static function makeFromRequest(StoreRequest $request): self
    {
        return new self(
            $request->id,
            $request->store_name,
            $request->postal_code,
            $request->status,
            1
        );
    }
}
