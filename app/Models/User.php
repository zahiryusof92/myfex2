<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable {

    use HasFactory,
        Notifiable;

    const DRAFT = 0;
    const BARU = 1;
    const TELAH_DINILAI = 2;
    const DILULUSKAN = 3;
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
        $status = "BARU";

        if ($this->status == SELF::BARU) {
            $status = "BARU";
        } else if ($this->status == SELF::TELAH_DINILAI) {
            $status = "TELAH DINILAI";
        } else if ($this->status == SELF::DILULUSKAN) {
            $status = "DILULUSKAN";
        } else if ($this->status == SELF::DITOLAK) {
            $status = "DITOLAK";
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
                        ->orWhere('status', SELF::TELAH_DINILAI);
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
