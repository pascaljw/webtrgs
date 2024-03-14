<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {
        $leave = Leave::whereNotNull('leave')->first();
        if ($leave) {
            return view('back.academic.leave.index', compact('leave'));
        } else {
            return view('back.academic.leave.noleave');
        }
    }

    public function create()
    {
        return view('back.academic.leave.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'leave' => 'required',
        ]);

        Leave::create([
            'leave' => $request->leave,
        ]);

        return redirect()->route('leave');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'leave' => 'required',
        ]);
        $leave = Leave::find($id);
        $leave->update([
            'leave' => $request->leave,
        ]);
        return redirect()->route('leave');
    }
}
