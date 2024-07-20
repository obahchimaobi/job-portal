<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Candidate extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['candidate_name', 'candidate_email', 'candidate_password'];

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
