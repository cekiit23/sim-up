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

    public function edit($id)
    {
        $utangbyid = Piutang::find($id);

        return view('piutang.edit', compact(['utangbyid']));
    }

    public function update($id, Request $req)
    {
        $piutang = Piutang::find($id);

        $piutang->update($req->except('_method','_token','submit'));

        return redirect('/index');
    }

    public function remove($id)
    {
        $piutang = Piutang::find($id);

        $piutang->delete();

        return redirect('/index');
    }
}
