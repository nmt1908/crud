<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Favorities extends Model
{
    use HasFactory;
    protected $table = 'favorities';

    protected $primaryKey = 'favorite_id';

    public $incrementing = true;

    /**
     * Relationship
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
