<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['employer_name', 'employer_email', 'employer_password'];

    protected $hidden = [
        'employer_password',
    ];

    public function getAuthIdentifierName()
    {
        return 'employer_email';
    }

    public function getAuthPassword()
    {
        return $this->employer_password;
    }
}
