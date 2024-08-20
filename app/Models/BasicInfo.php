<?php

namespace App\Models;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BasicInfo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }
}
