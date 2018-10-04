<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $additional_attributes = ['full_name'];
    
    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->father_name} {$this->mother_name}";
    }
}
