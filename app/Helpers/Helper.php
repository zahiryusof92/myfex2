<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\State;
use App\Models\Company;
use App\Models\BrandRights;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class Helper {

    const PEMBERI_FRANCAIS = 1;
    const FRANCAISI_INDUK = 2;
    const PEMEGANG_FRANCAIS = 3;

    public static function typeFranchiseList() {
        $franchise_type = array(
            '' => '- Sila Pilih - ',
            self::PEMBERI_FRANCAIS => 'Pemberi Francais',
            self::FRANCAISI_INDUK => 'Francaisi Induk',
        );

        return $franchise_type;
    }

    public static function approvedBrandList() {
        $brand = ['' => '- Sila Pilih - '];

        if (Auth::user()->isUser()) {
            $brand += BrandRights::join('brands', 'brand_rights.brand_id', '=', 'brands.id')
                ->where('brand_rights.company_id', Auth::user()->company_id)
                ->where('brand_rights.status', BrandRights::DILULUS)
                ->orderBy('brands.name', 'asc')
                ->pluck('brands.name', 'brands.id')                    
                ->toArray();
        }        

        return $brand;
    }

    public static function countryList() {
        $country = ['' => '- Sila Pilih - '];
        $country += Country::orderBy('nicename', 'asc')->pluck('nicename', 'id')->toArray();

        return $country;
    }

    public static function malaysiaSateList() {
        $state = ['' => '- Negeri - '];
        $state += State::where('country_id', 129)->orderBy('name', 'asc')->pluck('name', 'id')->toArray();

        return $state;
    }

    public static function getCompanyByConsultant($consultant_id) {
        $company = ['' => '- Sila Pilih - '];
        $company += Company::where('consultant', false)->where('consultant_id', $consultant_id)->where('status', Company::DILULUS)->orderBy('name', 'asc')->pluck('name', 'id')->toArray();

        return $company;
    }

    public static function getFranchiseType($type) {
        if ($type == self::PEMBERI_FRANCAIS) {
            $franchise_type = "Pemberi Francais";
        } else if ($type == self::FRANCAISI_INDUK) {
            $franchise_type = "Francaisi Induk";
        } else if ($type == self::PEMEGANG_FRANCAIS) {
            $franchise_type = "Pemegang Francais";
        } else {
            $franchise_type = '<i>(not set)</i>';
        }

        return $franchise_type;
    }

    public static function getFormattedDate($date, $type = 'datetime', $array = false) {

        if ($date == '') {
            return null;
        }

        if ($type == 'datetime') {
            $dt['datetime'] = date('Y-m-d H:i:s', strtotime($date));
            $dt['formatted'] = date('d-M-Y H:i:s', strtotime($date));
        } else {
            $dt['date'] = date('Y-m-d', strtotime($date));
            $dt['formatted'] = date('d-M-Y', strtotime($date));
        }

        if ($array == 'true') {
            return $dt;
        }
        return $dt['formatted'];
    }

}
