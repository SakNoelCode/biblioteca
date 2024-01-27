<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prestamista extends Model
{
    use HasFactory;

    //properties
    protected $guarded = ['id'];

    //Relations
    public function prestamos(): HasMany
    {
        return $this->hasMany(Prestamos::class);
    }
}
