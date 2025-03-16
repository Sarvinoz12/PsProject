<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','image','continuity','user_id'];

    public function users()
    {
        $this->belongsToMany(User::class);
    }
}
