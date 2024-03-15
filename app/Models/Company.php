<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', // Add 'user_id' to the fillable array
        // Add other fillable attributes here if needed
    ];

    public $timestamps = true;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
