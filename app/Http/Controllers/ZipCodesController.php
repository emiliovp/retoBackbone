<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aftab\Sepomex\Facades\Sepomex;

class ZipCodesController extends Controller
{
    public function zipcode($zip_code) {
        return Sepomex::getByPostal($zip_code);
    }
}
