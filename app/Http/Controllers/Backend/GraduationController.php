<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Graduation;
use Illuminate\Http\Request;

class GraduationController extends Controller
{
    public function index()
    {
        $graduation = Graduation::whereNotNull('graduation')->first();
        if ($graduation) {
            return view('back.academic.graduation.index', compact('graduation'));
        } else {
            return view('back.academic.graduation.nograduation');
        }
    }

    public function create()
    {
        return view('back.academic.graduation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'graduation' => 'required',
        ]);

        Graduation::create([
            'graduation' => $request->graduation,
        ]);

        return redirect()->route('graduation');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'graduation' => 'required',
        ]);
        $graduation = Graduation::find($id);
        $graduation->update([
            'graduation' => $request->graduation,
        ]);
        return redirect()->route('graduation');
    }
}
