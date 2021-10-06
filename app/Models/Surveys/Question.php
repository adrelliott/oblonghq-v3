<?php

namespace App\Models\Surveys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function response()
    {
        return $this>hasOne(Response::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
