<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ejemplare extends Model
{
    use HasFactory;

    //properties
    protected $guarded = ['id'];

    //Relations
    public function tipo(): BelongsTo
    {
        return $this->belongsTo(Tipo::class);
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function subcategoria(): BelongsTo
    {
        return $this->belongsTo(Subcategoria::class);
    }

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
