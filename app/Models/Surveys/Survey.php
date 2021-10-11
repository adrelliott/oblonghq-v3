<?php

namespace App\Models\Surveys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\IsTenantTrait as BelongsToATenant;
use App\Models\Crm\Business;

class Survey extends Model
{
    use HasFactory;
    use BelongsToATenant;

    protected $with = ['sections', 'sections.questions'];

    public function sections()
    {
        return $this->belongsToMany(Section::class)
            ->orderBy('order', 'asc')
            ->withTimestamps();
    }

    public function client()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }

    public function questionsCount()
    {
        return 1;
    }

    // public function responses()
    // {
    //     return $this->hasManyThrough(Question::class, Section::class)
    //         ->with('responses');
    // }
}
