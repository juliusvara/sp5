<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $fillable = ['title', 'description'];

    public function students(){
        return $this->hasMany('App\Models\Student');
    }
}
