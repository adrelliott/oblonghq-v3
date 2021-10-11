<?php

namespace App\Models\Surveys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class)
            ->orderBy('order', 'asc')
            ->withTimestamps();
    }

    public function getQuestionCountAttribute()
    {
        return $this->questions->count();
    }

    // public function responses()
    // {
    //     return $this->hasManyThrough(Response::class, Question::class);
    // }
}
