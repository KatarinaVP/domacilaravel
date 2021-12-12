<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poslovnica;
use App\Models\Zaposleni;

class Kompanija extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'maticni_broj',
    ];

    public function poslovnice()
    {
        return $this->hasMany(Poslovnica::class);
    }

    public function zaposleni()
    {
        return $this->hasManyThrough(Zaposleni::class, Poslovnica::class);
    }
}
