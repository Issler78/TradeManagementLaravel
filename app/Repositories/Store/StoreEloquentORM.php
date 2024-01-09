<?php

namespace App\Repositories\Store;

use App\DTOs\Store\NewStoreDTO;
use App\DTOs\Store\UpdateStoreDTO;
use App\Models\Store;

class StoreEloquentORM
{
    public function __construct(
        protected Store $model
    ){}

    public function getAll()
    {
        return $this->model->all();
    }

    public function new(NewStoreDTO $dto)
    {
        return $this->model->create(
            (array) $dto
        );
    }
    
    public function update(UpdateStoreDTO $dto)
    {
        if (!$store = $this->model->findOrFail($dto->id))
        {
            return null;
        }

        return $store->update(
            (array) $dto
        );
    }

    public function delete(string $id)
    {
        $this->model->findOrFail($id)->delete();
    }
}