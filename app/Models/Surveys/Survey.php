<?php

namespace App\Models\Surveys;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\IsTenantTrait as BelongsToATenant;

class Survey extends Model
{
    use HasFactory;
    use BelongsToATenant;
}
