<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface TestRepositoryInterface
{
    public function all(): Collection;
    public function find($id): ?Model;
    public function create(array $data): Model;
    public function update($id, array $data): ?Model;
    public function delete($id): bool;
}

