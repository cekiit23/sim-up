<?php

namespace App\Http\Controllers;

use App\Models\Piutang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class piutangController extends Controller
{
    //get data piutang
    public function index()
    {
        $loans = Piutang::all();

        return view('piutang.index', compact(['loans']));
    }

    public function create()
    {
        return 'halaman ini adalah halaman untuk menambah hutang piutang kita sehingga kita tidak usah menulis dibuka teman - teman semua nya';
    }
}
