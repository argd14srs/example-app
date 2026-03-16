<?php

// declare(strict_types=1);

namespace App\Repositories;

use App\Models\test;
use App\Repositories\Contracts\TestRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class TestRepository implements TestRepositoryInterface
{

    // public function __construct(private test $model)
    // {
    // }

    public function all(): Collection
    {
        return test::all();
    }

    public function find($id): ?Model
    {
        return test::find($id);
    }

    public function create(array $data): Model
    {
        return test::create($data);
    }

    public function update($id, array $data): ?Model
    {
        $model = test::find($id);
        $model?->update($data);
        return $model;
    }

    public function delete($id): bool
    {
        return test::find($id)?->delete() ?? false;
    }
}

?>