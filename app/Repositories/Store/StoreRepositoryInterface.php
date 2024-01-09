<?php

namespace App\Repositories\Store;

use App\DTOs\Store\NewStoreDTO;
use App\DTOs\Store\UpdateStoreDTO;
use stdClass;

interface StoreRepositoryInterface
{
    public function getAll(): array;

    public function new(NewStoreDTO $dto): stdClass;
    
    public function update(UpdateStoreDTO $dto): stdClass|null;

    public function delete(string $id): void;
}
