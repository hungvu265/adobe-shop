<?php

namespace App\Services;

abstract class BaseService
{
    protected $repository;

    public function getAll($paginate = false)
    {
        if ($paginate) {
            return $this->repository->paginate($paginate);
        }

        return $this->repository->all();
    }

    public function getLimit($limit = 8)
    {
        return $this->repository->offset(0)->limit($limit)->get();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }
}
