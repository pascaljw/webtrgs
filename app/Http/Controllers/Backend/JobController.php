<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Academic;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $job = Academic::whereNotNull('job')->first();
        if ($job) {
            return view('back.academic.job.index', compact('job'));
        } else {
            return view('back.academic.job.nojob');
        }
    }

    public function create()
    {
        return view('back.academic.job.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job' => 'required',
        ]);

        Academic::create([
            'job' => $request->job,
        ]);

        return redirect()->route('job');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'job' => 'required',
        ]);
        $job = Academic::find($id);
        $job->update([
            'job' => $request->job,
        ]);
        return redirect()->route('job');
    }
}
