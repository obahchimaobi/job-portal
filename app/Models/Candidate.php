<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Candidate extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'candidate_name',
        'candidate_email',
        'candidate_password',
        'image',
        'job_name',
        'phone',
        'job_type',
        'job_category',
        'experience',
        'education',
        'current_salary',
        'expected_salary',
        'age',
        'language',
        'about',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'github_link',
        'country',
        'city',
        'full_address',
    ];

    protected $hidden = [
        'candidate_password',
    ];

    public function getAuthIdentifierName()
    {
        return 'candidate_email';
    }

    public function getAuthPassword()
    {
        return $this->candidate_password;
    }
}
