<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','image','continuity'];

    public static function paginate(int $int)
    {
    }

    public function users()
    {
        $this->belongsToMany(User::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function psixolog()
    {
        return $this->belongsTo(Psixolog::class);
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
