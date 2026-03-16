<?php 

declare(strict_types=1);

namespace App\Services;

use App\Models\test;
use App\Repositories\Contracts\TestRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class TestService
{
    public function __construct(protected TestRepositoryInterface $testRepository)
    {
    }

    public function getAllTests(): Collection
    {
        return $this->testRepository->all();
    }

    public function create(array $data):test{
        return $this->testRepository->create($data);
    }

}