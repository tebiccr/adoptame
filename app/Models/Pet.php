<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname',
        'type',
        'profile_photo',
        'biography',
        'feature',
        'adoption',
        'organization_id'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }


}
