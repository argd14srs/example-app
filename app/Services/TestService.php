<?php 

declare(strict_types=1);

namespace App\Services;

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
}