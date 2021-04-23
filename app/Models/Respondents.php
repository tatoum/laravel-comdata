<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondents extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function forms(){
        return $this->belongsTo(Forms::class,'formm_id');
    }

    public function answers(){
        return $this->hasMany(Answers::class,'answer_id');
    }
}
