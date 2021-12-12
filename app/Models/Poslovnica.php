<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kompanija;
use App\Models\Zaposleni;

class Poslovnica extends Model
{
    use HasFactory;

    public function kompanija()
    {
        return $this->belongsTo(Kompanija::class);
    }

    public function zaposleni()
    {
        return $this->hasMany(Zaposleni::class);
    }
}
