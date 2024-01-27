<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bibliografia extends Model
{
    use HasFactory;

    //properties
    protected $guarded = ['id'];

    //Relations
    public function tipo(): BelongsTo
    {
        return $this->belongsTo(Tipos::class);
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function ejemplare(): HasOne
    {
        return $this->hasOne(Ejemplare::class);
    }
}
