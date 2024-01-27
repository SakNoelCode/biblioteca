<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    //properties
    protected $guarded = ['id'];

    //Relations
    public function subcategorias(): HasMany
    {
        return $this->hasMany(Subcategoria::class);
    }

    public function bibliografias(): HasMany
    {
        return $this->hasMany(Bibliografia::class);
    }
}
