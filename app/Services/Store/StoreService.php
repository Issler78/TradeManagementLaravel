<?php

namespace App\Services\Store;

use App\DTOs\Store\NewStoreDTO;
use App\DTOs\Store\UpdateStoreDTO;
use App\Repositories\Store\StoreEloquentORM;
use App\Repositories\Store\StoreRepositoryInterface;

class StoreService
{
    public function __construct(
        protected StoreRepositoryInterface $repository
    ){}

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function new(NewStoreDTO $dto)
    {
        return $this->repository->new($dto);
    }
    
    public function update(UpdateStoreDTO $dto)
    {
        return $this->repository->update($dto);
    }

    public function delete(string $id)
    {
        return $this->repository->delete($id);
    }
}
