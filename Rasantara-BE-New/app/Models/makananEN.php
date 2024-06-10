<?php

namespace App\Models;

use App\Models\DetailEN; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakananEN extends Model
{
    use HasFactory;
    protected $table = 'makanansEN';
    protected $guarded = ['id'];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function detail()
    {
        return $this->hasOne(DetailEN::class); 
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
