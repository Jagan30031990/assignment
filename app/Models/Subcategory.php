<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table="mst_subcategory";

     protected $fillable = [
        'id',
        'sub_category_name',
        'category_id',
        'created_at',
        'updated_at',
    ];

     public function Category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
