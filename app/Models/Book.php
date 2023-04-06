<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Book
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $author
 * @property Carbon|null $created_at
 *
 * @method static Builder|Book query()
 * @mixin Eloquent
 */
class Book extends Model
{
    protected $guarded = [
        'id'
    ];
}
