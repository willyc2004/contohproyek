<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
        'its_login',
        'its_active'
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

    public function buyer(): HasMany
    {
        return $this->hasMany(Sales::class, 'user_id', 'id');
    }

    public function isAdmin(): bool
    {
        if ($this->role_id == 1) {
            return true;
        }
        return false;
    }

    public function isEditor(): bool
    {
        if ($this->role_id == 2) {
            return true;
        }
        return false;
    }

    public function isMember(): bool
    {
        if ($this->role_id == 3) {
            return true;
        }
        return false;
    }
}
