<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'message'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function psixolgs(): BelongsTo
    {
        return $this->belongsTo(Psixolog::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
