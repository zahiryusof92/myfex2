<?php

namespace App\Helpers;

class Helper {

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
