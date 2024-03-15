<?php

namespace App\Models;

use App\Models\User;
use App\Models\Company;
use App\Models\Candidate;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;
    public $timestamps = true;

// Job belongsTo = user, company, candidate
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
        public function company(): BelongsTo{
            return $this->belongsTo(Company::class);
        }
            public function candidate(): BelongsTo{
                return $this->belongsTo(Candidate::class);
            }
                public function applications(): HasMany
                {
                    return $this->hasMany(Application::class);
                }
}
