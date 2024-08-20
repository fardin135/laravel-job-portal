<?php

namespace App\Models;

use App\Models\User;
use App\Models\Company;
use App\Models\SavedJob;
use App\Models\Candidate;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deadline' => 'datetime',
    ];
    protected $fillable = [
        'user_id',
        'company_name',
        'job_title',
        'role',
        'job_type',
        'vacancy',
        'deadline',
        'required_skills',
        'location',
        'description',
        'responsibility',
        'qualifications',
        'salary',
    ];

// Job belongsTo = user, company, candidate
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
        public function company(): BelongsTo{
            return $this->belongsTo(Company::class);
        }
        public function companyDetail(): BelongsTo
        {
            return $this->belongsTo(Company::class);
        }
            public function candidate(): BelongsTo{
                return $this->belongsTo(Candidate::class);
            }
                public function applications(): HasMany
                {
                    return $this->hasMany(Application::class);
                }
                    public function savedJobs(): HasMany
                    {
                        return $this->hasMany(SavedJob::class);
                    }
}
