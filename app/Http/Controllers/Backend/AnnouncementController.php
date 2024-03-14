<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('back.announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('back.announcements.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name'          => 'required|min:3',
            'content'       => 'required',
        ]);

        $imagename = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagename[] = $image->store('announcements');
            }
        }

        $announcement = Announcement::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'content' => $request->content,
            'images' => implode(' ', $imagename),
        ]);
        return redirect()->route('announcement');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required|min:3',
            'content'       => 'required',
        ]);

        $announcement = Announcement::find($id);

        $imagename = [];
        if ($request->hasFile('images')) {
            foreach (explode(' ', $announcement->images) as $images) {
                Storage::delete($images);
            };
            foreach ($request->file('images') as $image) {
                $imagename[] = $image->store('announcements');
            }
        }

        if ($request->hasFile('images') == null) {
            $imagename[] = $announcement->images;
        }
        $announcement->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'content' => $request->content,
            'images' => implode(' ', $imagename),
        ]);
        return redirect()->route('announcement');
    }

    public function edit($id)
    {
        $announcement = Announcement::find($id);
        return view('back.announcements.edit', compact('announcement'));
    }

    public function datatable()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->get();

        return datatables()->of($announcements)
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['image', 'action'])
            ->toJson();
    }

    public function delete($id)
    {
        $announcement = Announcement::find($id);
        foreach (explode(' ', $announcement->images) as $images) {
            Storage::delete($images);
        };
        Announcement::destroy($id);
        return redirect()->route('blog');
    }
}
