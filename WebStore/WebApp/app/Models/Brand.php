<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    public $timestamps = FALSE;     // turn off date time on database
    protected $table = 'brand';
    protected $fillable = ['id', 'name'];
    // edit model
    static function edit(int $id, $arr){
        return self::where('id', $id)->update($arr);
    }
    // remove method
    static function remove(int $id){
        return self::where('id', $id)->delete($id);
    }
}
