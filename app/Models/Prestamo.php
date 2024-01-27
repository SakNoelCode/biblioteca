<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestamo extends Model
{
    use HasFactory;

    //Properties
    protected $guarded = ['id'];

    //Relations
    public function prestamista(): BelongsTo
    {
        return $this->belongsTo(Prestamista::class);
    }

    public function ejemplare(): BelongsTo
    {
        return $this->belongsTo(Ejemplare::class);
    }
}
