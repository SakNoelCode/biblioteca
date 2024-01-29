<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategoria extends Model
{
    use HasFactory;

    //Properties
    protected $guarded = ['id'];

    //Relations
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function ejemplares(): HasMany
    {
        return $this->hasMany(Ejemplare::class);
    }
}
