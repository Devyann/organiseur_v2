<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'category_id', 'user_id', 'order'];

    // Une tâche a une catégorie
    public function category() {
        return $this->hasOne(Category::class);
    }
    // Une tâche appartient à un utilisateur
    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
