<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psixolog extends Model
{
    use HasFactory;
    protected $fillable=['name','image','tajriba','spes','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
