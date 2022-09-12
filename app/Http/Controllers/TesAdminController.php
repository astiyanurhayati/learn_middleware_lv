<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesAdminController extends Controller
{
    public function tes(){
        return view('admin.tes');
    }
}
