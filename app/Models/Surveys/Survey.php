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

    protected $attributes = [
        'current_step_no' => 1
    ];

    protected $guarded = ['tenant_id'];

    public function sections()
    {
        return $this->belongsToMany(Section::class)
            ->orderBy('order', 'asc')
            ->withTimestamps();
    }

    public function client()
    {
        return $this->belongsTo(Business::class, 'client_id');
    }

    // public function setClientIdAttribute($value)
    // {
    //     return (int)$value;
    // }

    // public function questionsCount()
    // {
    //     return 1;
    // }

    // public function responses()
    // {
    //     return $this->hasManyThrough(Question::class, Section::class)
    //         ->with('responses');
    // }
}
