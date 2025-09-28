<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $table = 'points';
    protected $fillable = ['quantity','group_id'];
    public $timestamps = true;

    // relation
    public function group(){
        return $this->belongsTo(Group::class);
    }
}
