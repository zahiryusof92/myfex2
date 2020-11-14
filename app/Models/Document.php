<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model {

    use HasFactory;

    public function getStatus() {
        $status = '<span class="badge badge-pill badge-danger">Tidak</span>';

        if ($this->is_active) {
            $status = '<span class="badge badge-pill badge-success">Ya</span>';
        }

        return $status;
    }

}
