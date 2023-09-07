<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campament extends Model{
    use HasFactory;
    protected $table = 'campamentis';
    protected $fillable = ['name','age','phone','gender','image','status','ministry_id','group_id','capacity'];
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class,'campamenti_id','id');
    }
}
