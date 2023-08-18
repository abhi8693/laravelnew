<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Selling extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'selling_products';
    protected $dates = ['deleted_at'];
    public function comments(){
        return $this->hasMany(Comment::class,'product_id');
    }
    public function Category(){
        return $this->belongsTo(category::class,'category_id');
    }
    public function product(){
        return $this->belongsTo(category::class,'category_id');
    }
}
