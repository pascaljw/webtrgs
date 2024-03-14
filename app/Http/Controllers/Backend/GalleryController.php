<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Filter;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        return view('back.galleries.index');
    }

    public function create()
    {
        $filters = Filter::all();
        return view('back.galleries.create', compact('filters'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|min:3',
            'image' => 'required',
            'description' => 'required',
            'filter_id' => 'required',
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('gallery');
        }

        Gallery::create([
            'name' => $request->name,
            'filter_id' => $request->filter_id,
            'description' => $request->description,
            'image' => $image
        ]);

        return redirect()->route('gallery');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'filter_id' => 'required',
        ]);

        $gallery = Gallery::find($id);
        $image = $gallery->image ?? null;

        if ($request->hasFile('image')) {
            if ($gallery->image) {
                Storage::delete($gallery->image);
            }
            $image = $request->file('image')->store('gallery');
        }
        $gallery->update([
            'name' => $request->name,
            'filter_id' => $request->filter_id,
            'description' => $request->description,
            'image' => $image
        ]);
        return redirect()->route('gallery');
    }

    public function edit($id)
    {
        $filters = Filter::all();
        $gallery = Gallery::find($id);
        return view('back.galleries.edit', compact('gallery', 'filters'));
    }

    public function datatable()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->get();

        return datatables()->of($galleries)
            ->addColumn('image', function (Gallery $gallery) {
                return '<img src="' . $gallery->getImage() . '" height="150px"/>';
            })
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['image', 'action'])
            ->toJson();
    }

    public function delete($id)
    {
        $gallery = Gallery::find($id);
        Storage::delete($gallery->image);
        Gallery::destroy($id);
        return redirect()->route('gallery');
    }
}
