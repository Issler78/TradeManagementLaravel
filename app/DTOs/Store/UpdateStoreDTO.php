<?php

namespace App\DTOs\Store;

use App\Http\Requests\StoreRequest;

class UpdateStoreDTO
{
    public function __construct(
        public string $id,
        public string $store_name,
        public string $postal_code,
        public string $status,
        public string $user_id
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
