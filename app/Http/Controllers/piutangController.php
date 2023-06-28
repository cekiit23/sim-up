<?php

namespace App\Http\Controllers;

use App\Models\Piutang;
use App\Models\TotalHutang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class piutangController extends Controller
{
    //get data piutang
    public function index()
    {
        $loans = Piutang::all();

        $total = TotalHutang::first();

        return view('piutang.index', compact(['loans','total']));
    }

    public function create()
    {
        return view('piutang.create');
    }

    public function store(Request $request)
    {
        $utang = $request->except(['_token', 'submit']);

        $total = TotalHutang::first();

        $total_hutang = $total->total_semua_hutang + $request->jumlah_hutang;

        $total-> total_semua_hutang = $total_hutang;

        $total->save();

        Piutang::create($utang);

        return redirect('/');
    }

    public function edit($id)
    {
        $utangbyid = Piutang::find($id);

        return view('piutang.edit', compact(['utangbyid']));
    }

    public function update($id, Request $req)
    {
        $piutang = Piutang::find($id);

        $piutang->update($req->except('_method','_token','submit'));

        return redirect('/');
    }

    public function remove($id)
    {
        $piutang = Piutang::find($id);

        $piutang->delete();

        return redirect('/');
    }
}
