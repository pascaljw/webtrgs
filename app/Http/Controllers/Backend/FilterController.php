<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FilterController extends Controller
{
    public function index()
    {
        return view('back.filter.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Filter::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back()->with('Filter berhasil ditambahkan');
    }

    public function edit($id)
    {
        $filter = Filter::find($id);
        return view('back.filter.edit', compact('filter'));
    }

    public function update(Request $request, $id)
    {
        $filter = Filter::find($id);
        $filter->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->route('filter')->with('Filter berhasil di-update');
    }

    public function delete($id)
    {
        Filter::destroy($id);
        return redirect()->back();
    }

    public function datatable()
    {
        $filters = Filter::all();

        return datatables()->of($filters)
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->toJson();
    }
}
