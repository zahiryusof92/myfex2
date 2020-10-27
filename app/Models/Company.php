<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Company extends Model {

    use HasFactory;

    const DRAF = 0;
    const BARU = 1;
    const DINILAI = 2;
    const DILULUS = 3;
    const DITOLAK = 4;

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

    public static function getTotalPending() {
        $total = 0;

        if (Auth::user()->isUser()) {
            $total = Company::where('id', Auth::user()->company_id)
                    ->where(function($query) {
                        $query->where('status', SELF::DRAF);
                    })
                    ->count();
        } else if (Auth::user()->isPPU()) {
            $total = Company::where('consultant', false)
                    ->where(function($query) {
                        $query->where('status', SELF::BARU);
                    })
                    ->count();
        } else if (Auth::user()->isKPP()) {
            $total = Company::where('consultant', false)
                    ->where(function($query) {
                        $query->where('status', SELF::DINILAI);
                    })
                    ->count();
        }

        return $total;
    }

    public function user() {
        return $this->hasOne('App\Models\User');
    }
    
    public function consultant() {
        return $this->belongsTo('App\Models\User', 'consultant_id');
    }
    
    public function brandrights() {
        return $this->hasMany('App\Models\BrandRights');
    }

}
