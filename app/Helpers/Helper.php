<?php

namespace App\Helpers;

use App\Models\Country;

class Helper {

    public static function typeFranchiseList() {
        $franchise_type = array(
            '' => '- Sila Pilih - ',
            '1' => 'Pemberi Francais',
            '2' => 'Pemegang Francais',
        );

        return $franchise_type;
    }

    public static function countryList() {
        $country = ['' => '- Sila Pilih - '];
        $country += Country::orderBy('nicename', 'asc')->pluck('nicename', 'id')->toArray();

        return $country;
    }

    public static function getFranchiseType($type) {
        if ($type == 1) {
            $franchise_type = "Francaisor";
        } else if ($type == 1) {
            $franchise_type = "Francaisi Induk";
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
