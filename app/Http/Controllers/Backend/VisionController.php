<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    public function index()
    {
        $vision = Program::whereNotNull('vision')->first();
        if ($vision) {
            return view('back.program.vision.index', compact('vision'));
        } else {
            return view('back.program.vision.novision');
        }
    }

    public function create()
    {
        return view('back.program.vision.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vision' => 'required',
        ]);

        Program::create([
            'vision' => $request->vision,
        ]);

        return redirect()->route('vision');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'vision' => 'required|min:10',
        ]);
        $vision = Program::find($id);
        $vision->update([
            'vision' => $request->vision,
        ]);
        return redirect()->route('vision');
    }
}
