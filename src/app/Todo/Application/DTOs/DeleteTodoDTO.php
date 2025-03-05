<?php

declare(strict_types=1);

namespace App\Todo\Application\DTOs;

use Illuminate\Foundation\Http\FormRequest;

readonly class DeleteTodoDTO
{
    public function __construct(
        public string $id,
        public ?string $title,
        public ?string $description,
        public bool $completed = false,
    ) {
    }

    public static function fromRequest(string $id, FormRequest $request): self
    {
        return new self(
            $id,
            $request->validated()['title'] ?? null,
            $request->validated()['description'] ?? null,
            $request->validated()['completed'] ?? false,
        );
    }
}
