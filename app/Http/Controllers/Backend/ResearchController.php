<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index()
    {
        $research = Research::whereNotNull('research')->first();
        if ($research) {
            return view('back.research.index', compact('research'));
        } else {
            return view('back.research.noresearch');
        }
    }

    public function create()
    {
        return view('back.research.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'research' => 'required',
        ]);

        Research::create([
            'research' => $request->research,
        ]);

        return redirect()->route('research');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'research' => 'required',
        ]);
        $research = Research::find($id);
        $research->update([
            'research' => $request->research,
        ]);
        return redirect()->route('research');
    }
}
