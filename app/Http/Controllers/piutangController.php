<?php

namespace App\Http\Controllers;

use App\Models\Piutang;
use Illuminate\Http\Request;

class piutangController extends Controller
{
    //get data piutang
    public function index()
    {
        $utang = Piutang::all();
    }
}
