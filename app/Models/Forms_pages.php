<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms_pages extends Model
{
    use HasFactory;

    protected $Fillable = [

    ];

    public function form(){
        return $this->BelongsTo(Forms::class, 'forms_id');
    }
    public function question(){
        return $this->HasMany(Questions::class, 'question_id');
    }
}
