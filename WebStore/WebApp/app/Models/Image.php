<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'Image';
    protected $fillable = ['ImageId', 'ImageUrl', 'OriginalName', 'Size', 'Type'];
    public $timestamps = FALSE;
}
