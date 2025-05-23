<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calling extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone','message'];

    public function users()
    {
        $this->hasMany(User::class);
    }
}
