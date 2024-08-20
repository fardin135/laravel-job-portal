<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Company;
use App\Models\SavedJob;
use App\Models\BasicInfo;
use App\Models\Candidate;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            if ($user->user_role === 'Company') {
                $company = $user->company()->create([
                    'user_id' => $user->id, // Use $user->id instead of Auth::user()->id
                    
                ]);
                $company->save();
            } elseif ($user->user_role === 'Candidate') {
                $candidate = $user->candidate()->create([
                    'user_id' => $user->id, // Use $user->id instead of Auth::user()->id
                ]);
                $candidate->save();
            }
        });
    }



// User hasOne = candidate, company
    public function candidate(): HasOne{
        return $this->hasOne(Candidate::class);
    }
        public function company(): HasOne{
            return $this->hasOne(Company::class);
        }
//User hasOne = companyDetail
    public function companyDetail(): HasOne
    {
        return $this->hasOne(CompanyDetail::class);
    }
// User hasMany = jobs, applications
            public function jobs(): HasMany{
                return $this->hasMany(User::class);
            }
                public function applications(): HasMany{
                    return $this->hasMany(Application::class);
                }
                    public function savedJobs(): HasMany{
                        return $this->hasMany(SavedJob::class);
                    }
// User hasOne = basicInfo, eduInfo, professionalAndExperience
                    public function basicInfo(): HasOne
                    {
                        return $this->hasOne(BasicInfo::class);
                    }

                        public function eduInfo(): HasOne{
                            return $this->hasOne(EduInfo::class);
                        }

                            public function professionalAndExperience(): HasOne{
                                return $this->hasOne(ProfessionalAndExperiences::class);
                            }



}
