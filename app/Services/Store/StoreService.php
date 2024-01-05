<?php

namespace App\Services\Store;

class StoreService
{
    protected $repository;

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function new()
    {
        return $this->repository->new();
    }
    
    public function update()
    {
        return $this->repository->update();
    }

    public function delete(string $store)
    {
        return $this->repository->delete($store);
    }
}
