<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;

class BrandRights extends Model {

    use HasFactory;

    const DRAF = 0;
    const BARU = 1;
    const DISYOR = 2;
    const DISOKONG = 3;
    const DIPERAKUI = 4;
    const DILULUS = 5;
    const DITOLAK = 6;

    public function getStatus() {
        $status = '<span class="badge badge-pill badge-dark">DRAF</span>';

        if ($this->status == SELF::DRAF) {
            $status = '<span class="badge badge-pill badge-dark">DRAF</span>';
        } else if ($this->status == SELF::BARU) {
            $status = '<span class="badge badge-pill badge-warning">BARU</span>';
        } else if ($this->status == SELF::DISYOR) {
            $status = '<span class="badge badge-pill badge-primary">DISYOR</span>';
        } else if ($this->status == SELF::DISOKONG) {
            $status = '<span class="badge badge-pill badge-secondary">DISOKONG</span>';
        } else if ($this->status == SELF::DIPERAKUI) {
            $status = '<span class="badge badge-pill badge-info">DIPERAKUI</span>';
        } else if ($this->status == SELF::DILULUS) {
            $status = '<span class="badge badge-pill badge-success">DILULUS</span>';
        } else if ($this->status == SELF::DITOLAK) {
            $status = '<span class="badge badge-pill badge-danger">DITOLAK</span>';
        }

        return $status;
    }

    public static function getApproved() {
        if (Auth::user()->isUser()) {
            $approved = BrandRights::where('company_id', Auth::user()->company_id)->where('status', SELF::DILULUS)->count();
        } else if (Auth::user()->isConsultant()) {
            $approved = BrandRights::where('consultant_id', Auth::user()->id)->where('status', SELF::DILULUS)->count();
        }

        if ($approved) {
            return true;
        }

        return false;
    }

    public static function showFranchisorButton() {
        if (self::getApproved()) {
            // show button
            $pending = Application::where('company_id', Auth::user()->company_id)->where('franchise_type_id', '!=', Helper::PEMEGANG_FRANCAIS)->where('status', '!=', self::DRAF)->count();
            if ($pending) {
                return false;
            }
            
            return true;
        }
        
        return false;
    }

    public static function getTotalPending() {
        $total = 0;

        if (Auth::user()->isUser()) {
            $total = BrandRights::where('company_id', Auth::user()->company_id)->where('status', SELF::DRAF)->count();
        } else if (Auth::user()->isConsultant()) {
            $total = BrandRights::where('consultant_id', Auth::user()->id)->where('status', SELF::DRAF)->count();
        } else if (Auth::user()->isPPU()) {
            $total = BrandRights::where('status', SELF::BARU)->count();
        } else if (Auth::user()->isKPP()) {
            $total = BrandRights::where('status', SELF::DISYOR)->count();
        } else if (Auth::user()->isPengarah()) {
            $total = BrandRights::where('status', SELF::DISOKONG)->count();
        } else if (Auth::user()->isPendaftar()) {
            $total = BrandRights::where('status', SELF::DIPERAKUI)->count();
        }

        return $total;
    }

    public static function getApprovedOwnBrand() {
        $result = false;

        $brandRights = BrandRights::where('company_id', Auth::user()->company_id)->count();
        if ($brandRights) {
            $approved = BrandRights::where('company_id', Auth::user()->company_id)->where('status', SELF::DILULUS)->count();

            if ($approved) {
                $result = true;
            }
        }

        return $result;
    }

    public function brand() {
        return $this->belongsTo('App\Models\Brand');
    }

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }

    public function consultant() {
        return $this->belongsTo('App\Models\User', 'consultant_id');
    }

}
