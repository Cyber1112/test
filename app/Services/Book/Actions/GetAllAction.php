<?php

namespace App\Services\Book\Actions;

use App\Models\Book;

class GetAllAction
{
    /**
     * @return array
     */
    public function execute(): array
    {
        return Book::all()->toArray();
    }
}
