<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;
    protected $table = 'views';
    protected $fillable = ['group_id', 'product_id', 'see','incorrect'];
    public $timestamps = true;

    public function group(){
        return $this->belongsTo(Group::class,'id','group_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'id','product_id');
    }
    
}
