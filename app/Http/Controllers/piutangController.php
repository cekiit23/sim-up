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
        return view('piutang.create');
    }

    public function store(Request $request)
    {
        $utang = $request->except(['_token', 'submit']);

        Piutang::create($utang);

        return redirect('/index');
    }
}
