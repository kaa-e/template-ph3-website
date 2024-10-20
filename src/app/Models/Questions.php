<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questions extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['image', 'text'];
    public function quizzes() {
        return $this->belongsTo(Quizzes::class, 'quiz_id');
    }
    public function choices(){
        return $this->hasMany(Choices::class, 'question_id');
    }
}
