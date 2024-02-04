<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventario extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ejemplare(): BelongsTo
    {
        return $this->belongsTo(Ejemplare::class);
    }
}
