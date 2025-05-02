<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    use HasFactory;
    public $fillable=[
        'image',
        'question',
        'answer_a',
        'description_a',
        'answer_b',
        'description_b',
        'answer_c',
        'description_c',
        'answer_d',
        'description_d',
    ];

    public function psixolog()
    {
        return $this->belongsTo(Psixolog::class);
    }
}
