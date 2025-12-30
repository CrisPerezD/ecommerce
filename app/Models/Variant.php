<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Variant extends Model
{
    use HasFactory;

    //Relación uno a muchos inversa
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //Relación muchos a muchos
    public function features()
    {
        return $this->belongsToMany(Feature::class)
                    ->withTimestamps();
    }
}