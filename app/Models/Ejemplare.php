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
    public function bibliografia(): BelongsTo
    {
        return $this->belongsTo(Bibliografia::class);
    }

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
