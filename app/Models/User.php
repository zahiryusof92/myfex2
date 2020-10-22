<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use HasFactory,
        Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() {

        return $this->belongsTo('App\Models\Role');
    }

    public function isUser() {
        return $this->role->name === 'Pengguna Perniagaan Francais';
    }

    public function isConsultant() {
        return $this->role->name === 'Pengguna Konsultan Francais';
    }

    public function isAccountant() {
        return $this->role->name === 'Pegawai Proses (Kewangan & Pemasaran)';
    }

    public function isPPU() {
        return $this->role->name === 'Pegawai Proses (Utama)';
    }

    public function isPPF() {
        return $this->role->name === 'Pegawai Proses (Francais)';
    }

    public function isKPP() {
        return $this->role->name === 'Ketua Pegawai Proses';
    }

    public function isPengarah() {
        return $this->role->name === 'Pengarah';
    }

    public function isPendaftar() {
        return $this->role->name === 'Pendaftar';
    }

    public function isSuperAdmin() {
        return $this->role->name === 'Super Admin';
    }

}
