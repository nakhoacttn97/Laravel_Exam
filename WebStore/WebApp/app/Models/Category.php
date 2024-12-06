<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    // default categories
    protected $table = 'category';
    protected $fillable = ['category_id', 'category_name'];
    static function edit(int $id, $arr){
        return self::where('category_id', $id)->update($arr);
    }
    static function find(int $id){
        return self::where('category_id', $id)->first();
    }
    static function remove(int $id){
        return self::where('category_id', $id)->delete($id);
    }
}
