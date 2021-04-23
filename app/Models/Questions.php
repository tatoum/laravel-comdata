<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $Fillable = [

    ];

    public function answer(){
        return $this->HasMany(Answers::class, 'answer_id');
    }
    public function pages(){
        return $this->BelongsTo(Forms_pages::class, 'form_page_id');
    }
}
