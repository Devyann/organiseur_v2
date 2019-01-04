<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];
    
    // Une catégorie a plusieurs tâches
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
