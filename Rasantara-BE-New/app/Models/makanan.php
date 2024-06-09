<?php

namespace App\Models;

use App\Models\Detail as ModelsDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function users()
{
    return $this->belongsToMany(User::class);
}
public function detail(){
    return $this->hasOne(ModelsDetail::class);
}
public function bookmarks()
{
    return $this->hasMany(Bookmark::class);
}
public function history()
{
    return $this->hasMany(History::class);
}
}
