<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index()
    {
        $scholarship = Scholarship::whereNotNull('scholarship')->first();
        if ($scholarship) {
            return view('back.scholarship.index', compact('scholarship'));
        } else {
            return view('back.scholarship.noscholarship');
        }
    }

    public function create()
    {
        return view('back.scholarship.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'scholarship' => 'required',
        ]);

        Scholarship::create([
            'scholarship' => $request->scholarship,
        ]);

        return redirect()->route('scholarship');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'scholarship' => 'required',
        ]);
        $scholarship = Scholarship::find($id);
        $scholarship->update([
            'scholarship' => $request->scholarship,
        ]);
        return redirect()->route('scholarship');
    }
}
