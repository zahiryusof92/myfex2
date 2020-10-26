<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Company extends Model {

    use HasFactory;

    const DRAF = 0;
    const BARU = 1;
    const TELAH_DINILAI = 2;
    const DILULUSKAN = 3;
    const DITOLAK = 4;

    public function getStatus() {
        $status = "DRAF";

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
                        $query->where('status', SELF::TELAH_DINILAI);
                    })
                    ->count();
        }

        return $total;
    }

    public function user() {
        return $this->hasOne('App\Models\User');
    }

}
