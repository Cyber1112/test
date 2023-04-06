<?php

namespace App\Services\Book\Actions;

use App\Models\Book;
use Illuminate\Support\Collection;

class InsertAction
{
    /**
     * @param array $payload
     * @return void
     */
    public function execute(array $payload)
    {
        Book::insert(
            $this->transformToOneFormat($payload)->toArray()
        );
    }

    /**
     * @param array $payload
     * @return Collection
     */
    private function transformToOneFormat(array $payload): Collection
    {
        $payload = $payload['data'] ?? $payload;

        return collect($payload)
            ->map(function (array $data) {
                return [
                    'title' => $data['title'] ?? $data['name'],
                    'description' => $data['desc'] ?? $data['description'],
                    'author' => $data['author'] ?? null,
                    'created_at' => $data['createdAt'] ?? null
                ];
            });
    }
}
