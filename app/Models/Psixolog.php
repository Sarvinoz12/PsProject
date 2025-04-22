<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psixolog extends Model
{
    use HasFactory;
    protected $guard = 'psixolog';
    protected $fillable = [
        'name', 'email', 'password', 'tajriba', 'spes', 'image', 'user_id', 'role_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
