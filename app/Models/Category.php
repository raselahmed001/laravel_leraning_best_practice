<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'category_row_id'; 

     protected $fillable = [
        'category_image',
        'category_description',
        'parent_id',
        'has_child',
        'is_featured',
        'level',
        'category_image',
    ];
}
