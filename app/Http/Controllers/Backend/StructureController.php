<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index()
    {
        $structure = Program::whereNotNull('structure')->first();
        if ($structure) {
            return view('back.program.structure.index', compact('structure'));
        } else {
            return view('back.program.structure.nostructure');
        }
    }

    public function create()
    {
        return view('back.program.structure.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'structure' => 'required',
        ]);

        Program::create([
            'structure' => $request->structure,
        ]);

        return redirect()->route('structure');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'structure' => 'required',
        ]);
        $structure = Program::find($id);
        $structure->update([
            'structure' => $request->structure,
        ]);
        return redirect()->route('structure');
    }
}
