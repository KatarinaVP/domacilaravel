<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Poslovnica;

class Zaposleni extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'br_telefona',
        'poslovnica_id'
    ];

    public function poslovnica()
    {
        return $this->belongsTo(Poslovnica::class);
    }
}
