<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Imports\CurriculumImport;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CurriculumController extends Controller
{
    public function index()
    {
        return view('back.curriculum.index');
    }

    public function import()
    {
        Excel::import(new CurriculumImport, request()->file('file'));

        return back();
    }

    public function datatable()
    {
        $curriculums = Curriculum::all();
        return datatables()->of($curriculums)
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['action', 'question'])
            ->toJson();
    }

    public function create()
    {
        return view('back.curriculum.create');
    }

    public function edit($id)
    {
        $curriculum = Curriculum::find($id);
        return view('back.curriculum.edit', compact('curriculum'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'credit' => 'required',
            'practice' => 'required',
            'semester' => 'required'
        ]);

        Curriculum::create([
            'code' => $request->code,
            'name' => $request->name,
            'credit' => $request->credit,
            'practice' => $request->practice,
            'semester' => $request->semester
        ]);

        return redirect()->route('curriculum');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'credit' => 'required',
            'practice' => 'required',
            'semester' => 'required'
        ]);

        $curriculum = Curriculum::find($id);

        $curriculum->update([
            'code' => $request->code,
            'name' => $request->name,
            'credit' => $request->credit,
            'practice' => $request->practice,
            'semester' => $request->semester
        ]);

        return redirect()->route('curriculum');
    }

    public function delete($id)
    {
        Curriculum::destroy($id);
        return redirect()->route('curriculum');
    }
}
