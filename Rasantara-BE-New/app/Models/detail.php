<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function makanan()
    {
        return $this->belongsTo(Makanan::class);
    }
}
