<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SavedJob extends Model
{
    use HasFactory;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
    public function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class);
    }
    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
}
