<?php

namespace App\Models\Crm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\IsTenantTrait as BelongsToATenant;

class Business extends Model
{
    use HasFactory;
    use BelongsToATenant;
}
