<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Product';
    protected $fillable = ['id', 'name', 'category_id', 'description', 'content', 'price', 'quantity', 'url'];

}
