<?php

namespace App\Models;

use App\Models\User;
use App\Models\EduInfo;
use App\Models\SavedJob;
use App\Models\BasicInfo;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProfessionalAndExperiences;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Add 'user_id' to the fillable array
        // Add other fillable attributes here if needed
    ];

    public $timestamps = true;
// Candidate belongsTO = user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

// Candidate hasMany = applications
        public function applications(): HasMany
        {
            return $this->hasMany(Application::class);
        }
    public function savedJobs(): HasMany
    {
        return $this->hasMany(SavedJob::class);
    }

// Candidate hasOne = basicInfo, eduInfo, professionalAndExperience
            public function basicInfo(): HasOne
            {
                return $this->hasOne(BasicInfo::class);
            }
                public function eduInfo(): HasOne
                {
                    return $this->hasOne(EduInfo::class);
                }
                    public function professionalAndExperience(): HasOne
                    {
                        return $this->hasOne(ProfessionalAndExperiences::class);
                    }


}
