<?php

namespace App\DTOs\Store;

use App\Http\Requests\StoreRequest;

class NewStoreDTO
{
    public function __construct(
        public string $store_name,
        public string $postal_code,
        public string $status,
        public string $user_id
    ){}

    public static function makeFromRequest(StoreRequest $request): self
    {
        return new self(
            $request->store_name,
            $request->postal_code,
            $request->status,
            1
        );
    }
}
