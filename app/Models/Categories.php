<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'publish'
    ];

    public function Parent_id()
    {
        return $this->hasMany(Categories::class, 'parent_id', 'id');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'categories_id', 'id');
    }
}