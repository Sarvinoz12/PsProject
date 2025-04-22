<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    public $fillable = ['name','slug'];

    public function services(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
    public function psixolog(): BelongsTo
    {
        return $this->hasMany(Psixolog::class);
    }
}
