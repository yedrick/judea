<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupQr extends Model
{
    use HasFactory;
    protected $table = 'group_qrs';
    protected $fillable = ['group_id','qr_id','pts'];
    public $timestamps = true;

    public function qr(){
        return $this->belongsTo(Qr::class,'qr_id','id');
    }

    public function group(){
        return $this->belongsTo(Group::class,'group_id','id');
    }

}
