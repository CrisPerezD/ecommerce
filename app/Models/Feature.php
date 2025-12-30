<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    //Relación uno a muchos inversa
    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    //Relación muchos a muchos
    public function variants()
    {
        return $this->belongsToMany(Variant::class)
                    ->withTimestamps();
    }
}
