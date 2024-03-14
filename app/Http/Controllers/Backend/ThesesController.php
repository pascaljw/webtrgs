<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Thesis;
use Illuminate\Http\Request;

class ThesesController extends Controller
{
    public function index()
    {
        return view('back.theses.index');
    }

    public function create()
    {
        return view('back.theses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|min:3',
            'nim'   => 'required|numeric',
            'title' => 'required',
            'year'  => 'required',
        ]);

        Thesis::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'title' => $request->title,
            'year' => $request->year,
            'adviser1' => $request->adviser1,
            'adviser2' => $request->adviser2,
            'adviser3' => $request->adviser3,
            'adviser4' => $request->adviser4,
        ]);

        return redirect()->route('theses');
    }

    public function datatable()
    {
        $theses = Thesis::orderBy('created_at', 'asc')->get();

        return datatables()->of($theses)
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->toJson();
    }
}
