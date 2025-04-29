<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id',
        'psixolog_id',
        'name',
        'phone',
        'message',
        'status',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function psixolog()
    {
        return $this->belongsTo(User::class, 'psixolog_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
