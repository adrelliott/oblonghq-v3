<?php

namespace App\Models\Surveys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    public function contact()
    {
        return $this->HasOne(Contact::class);
    }

    public function question()
    {
        return $this->HasOne(Question::class);
    }
}
