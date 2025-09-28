<?php

namespace App\Models;

use App\Helpers\Func;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    public $timestamps = true;

    // Boot model events
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($question) {
            if (empty($question->code)) {
                $question->code = Func::generateCode(10);
            }
        });

        static::saving(function ($question) {
            if (empty($question->code)) {
                $question->code = Func::generateCode(10);
            }
        });
    }

    // creamos  una tributo para obtener los nombres incorecto si es jsonde base de datos
    public function getIncorrectAttribute($value)
    {
        return json_decode($value);
    }
}
