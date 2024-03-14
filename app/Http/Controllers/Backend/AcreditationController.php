<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class AcreditationController extends Controller
{
    public function index()
    {
        $acreditation = Program::whereNotNull('acreditation')->first();
        if ($acreditation) {
            return view('back.program.acreditation.index', compact('acreditation'));
        } else {
            return view('back.program.acreditation.noacreditation');
        }
    }

    public function create()
    {
        return view('back.program.acreditation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'acreditation' => 'required',
        ]);

        Program::create([
            'acreditation' => $request->acreditation,
        ]);

        return redirect()->route('acreditation');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'acreditation' => 'required',
        ]);
        $acreditation = Program::find($id);
        $acreditation->update([
            'acreditation' => $request->acreditation,
        ]);
        return redirect()->route('acreditation');
    }
}
