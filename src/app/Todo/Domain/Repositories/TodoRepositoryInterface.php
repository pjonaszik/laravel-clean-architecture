<?php

declare(strict_types=1);

namespace App\Todo\Domain\Repositories;

use App\Todo\Domain\Entities\Todo;

interface TodoRepositoryInterface
{
    public function create(Todo $todo): Todo;
    public function retrieve(string $id, array $criteria): ?Todo;
    public function update(string $id, array $update): ?Todo;

    /**
     * @param array $update
     * @return Todo[]
     */
    public function retrieveAll(array $criteria): array;
}
