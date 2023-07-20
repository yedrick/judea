<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name','code','image','group_id'];
    public $timestamps = true;

    public function group(){
        return $this->belongsTo(Group::class,'id','group_id');
    }
    
}
