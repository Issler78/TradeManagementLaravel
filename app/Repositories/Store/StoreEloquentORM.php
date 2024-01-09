<?php

namespace App\Repositories\Store;

use App\DTOs\Store\NewStoreDTO;
use App\DTOs\Store\UpdateStoreDTO;
use App\Models\Store;
use stdClass;

class StoreEloquentORM implements StoreRepositoryInterface
{
    public function __construct(
        protected Store $model
    ){}

    public function getAll(): array
    {
        return $this->model->all()->toArray();
    }

    public function new(NewStoreDTO $dto): stdClass
    {
        $store = $this->model->create(
            (array) $dto
        );

        return (object) $store->toArray();
    }
    
    public function update(UpdateStoreDTO $dto): stdClass|null
    {
        if (!$store = $this->model->findOrFail($dto->id))
        {
            return null;
        }

        $store->update(
            (array) $dto
        );

        return (object) $store->toArray();
    }

    public function delete(string $id): void
    {
        $this->model->findOrFail($id)->delete();
    }
}