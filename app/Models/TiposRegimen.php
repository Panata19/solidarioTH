<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposRegimen extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','regimen_id'];

    public function regimen ()
    {
        return $this->belongsTo(Regimen::class);
    }
}
