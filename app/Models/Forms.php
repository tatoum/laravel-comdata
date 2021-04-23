<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;

    protected $Fillable = [

    ];

    public function respondant(){
        return $this->HasMany(Respondents::class, 'respondant_id');
    }
    public function pages(){
        return $this->HasMany(Forms_pages::class, 'Form_page_id');
    }


}
