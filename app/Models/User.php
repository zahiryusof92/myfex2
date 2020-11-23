<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable {

    use HasFactory,
        Notifiable,
        \OwenIt\Auditing\Auditable;

    const DRAF = 0;
    const BARU = 1;
    const DINILAI = 2;
    const DILULUS = 3;
    const DITOLAK = 4;

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

    public function getStatus() {
        $status = '<span class="badge badge-pill badge-dark">DRAF</span>';

        if ($this->status == SELF::DRAF) {
            $status = '<span class="badge badge-pill badge-dark">DRAF</span>';
        } else if ($this->status == SELF::BARU) {
            $status = '<span class="badge badge-pill badge-warning">BARU</span>';
        } else if ($this->status == SELF::DINILAI) {
            $status = '<span class="badge badge-pill badge-primary">DINILAI</span>';
        } else if ($this->status == SELF::DILULUS) {
            $status = '<span class="badge badge-pill badge-success">DILULUS</span>';
        } else if ($this->status == SELF::DITOLAK) {
            $status = '<span class="badge badge-pill badge-danger">DITOLAK</span>';
        }

        return $status;
    }

    public function role() {
        return $this->belongsTo('App\Models\Role');
    }

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }

    public static function getTotalPending() {
        $total = 0;

        if (Auth::user()->isPPU()) {
            $total = User::where('staff', false)
                    ->where(function($query) {
                        $query->where('status', SELF::BARU)
                        ->orWhere('status', SELF::DINILAI);
                    })
                    ->count();
        }

        return $total;
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

    public function isDasar() {
        return $this->role->name === 'Pegawai Proses (Dasar)';
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
