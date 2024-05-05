<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    public function index()
    {
        return view('back.team.index');
    }

    public function datatable()
    {
        $teams = Team::orderBy('name', 'asc')->get();
        return datatables()->of($teams)
            ->addColumn('image', function (Team $team) {
                return '<img src="' . $team->getImage() . '" height="150px"/>';
            })
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['image', 'action'])
            ->toJson();
    }

    public function create()
    {
        return view('back.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'nip'      => 'required',
            'description' => 'required',
            'position'  => 'required',
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images');
        }else {
            $image = 'default.jpg';
        }
        Team::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'image' => $image,
            'position' => $request->position,
            'interest' => $request->interest,
            'email' => $request->email,
            'description' => $request->description,
            'more' => $request->more,
            'education' => $request->education
        ]);

        return redirect()->route('team');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required|min:3',
            'description'    => 'required',
        ]);

        $team = Team::find($id);

        $image = $team->image ?? null;

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::delete($team->image);
            }
            $image = $request->file('image')->store('images');
        }

        $team->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'image' => $image,
            'position' => $request->position,
            'interest' => $request->interest,
            'email' => $request->email,
            'description' => $request->description,
            'education' => $request->education,
            'more' => $request->more,
        ]);

        return redirect()->route('team');
    }

    public function edit($id)
    {
        $team = Team::find($id);
        return view('back.team.edit', compact('team'));
    }

    public function delete($id)
    {
        $team = Team::find($id);
        Storage::delete($team->image);
        Team::destroy($id);
        return redirect()->route('team');
    }
}
