<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $fillable = ['name'];
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class,'group_id','id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'group_id','id');
    }

    public function view(){
        return $this->belongsTo(View::class,'group_id','id');
    }

    //pts
    public function group_qr(){
        return $this->hasMany(GroupQr::class,'group_id','id');
    }

    public function getTotalPointsAttribute() {
        return $this->group_qr->sum('pts');
    }

}
