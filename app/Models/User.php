<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'siswa_id',
        'foto',
        'role',
        'password',
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => Role::class
        ];
    }
    public function isAdmin()
    {
        return $this->role === Role::ADMIN;
    }
    public function foto(){
        return $this->foto;
    }
    public function isSiswa()
    {
        return $this->role === Role::SISWA;
    }

    public function role(){
        return match ($this->role) {
            Role::ADMIN => 'admin',
            Role::SISWA => 'siswa',
            Role::PANITIA => 'panitia'
        };
    }

}
