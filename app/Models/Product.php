<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Menambahkan properti $fillable untuk mass assignment
    protected $fillable = ['name', 'price', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
