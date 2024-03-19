<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $story = Program::whereNotNull('story')->first();
        // if ($story) {
        //     return view('back.program.story.index', compact('story'));
        // } else {
        //     return view('back.program.story.nostory');
        // }
        return view('back.program.story.nostory');
    }

    public function create()
    {
        return view('back.program.story.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'story' => 'required',
        ]);

        Program::create([
            'story' => $request->story,
        ]);

        return redirect()->route('story');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'story' => 'required',
        ]);
        $story = Program::find($id);
        $story->update([
            'story' => $request->story,
        ]);
        return redirect()->route('story');
    }
}
