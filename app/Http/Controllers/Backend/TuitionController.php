<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Academic;
use Illuminate\Http\Request;

class TuitionController extends Controller
{
    public function index()
    {
        $tuition = Academic::whereNotNull('tuition')->first();
        if ($tuition) {
            return view('back.academic.tuition.index', compact('tuition'));
        } else {
            return view('back.academic.tuition.notuition');
        }
    }

    public function create()
    {
        return view('back.academic.tuition.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tuition' => 'required',
        ]);

        Academic::create([
            'tuition' => $request->tuition,
        ]);

        return redirect()->route('tuition');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tuition' => 'required',
        ]);
        $tuition = Academic::find($id);
        $tuition->update([
            'tuition' => $request->tuition,
        ]);
        return redirect()->route('tuition');
    }
}
