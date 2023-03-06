<?php

namespace App\Helpers;

use App\Models\DetailKomentar;

class Helper
{
    static function getLastKomentar($id)
    {
        $response = DetailKomentar::where('indikator_id', $id)->orderBy('created_at', 'desc')->first();

        return $response->komentar;
    }
}
