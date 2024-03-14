<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('back.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('back.blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name'          => 'required|min:3',
            'content'       => 'required',
            'categories'    => 'required',
        ]);

        $imagename = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagename[] = $image->store('blogs');
            }
        }

        $categories = Category::find($request->categories);

        $blog = Blog::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'content' => $request->content,
            'images' => implode(' ', $imagename),
        ]);

        $blog->categories()->sync($categories);

        return redirect()->route('blog');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required|min:3',
            'content'       => 'required',
            'categories'    => 'required',
        ]);

        $blog = Blog::find($id);

        $imagename = [];
        if ($request->hasFile('images')) {
            foreach (explode(' ', $blog->images) as $images) {
                Storage::delete($images);
            };
            foreach ($request->file('images') as $image) {
                $imagename[] = $image->store('blogs');
            }
        }

        if ($request->hasFile('images') == null) {
            $imagename[] = $blog->images;
        }
        $categories = Category::find($request->categories);
        $blog->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'content' => $request->content,
            'images' => implode(' ', $imagename),
        ]);
        $blog->categories()->sync($categories);
        return redirect()->route('blog');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $blog = Blog::find($id);
        return view('back.blogs.edit', compact('blog', 'categories'));
    }

    public function datatable()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();

        return datatables()->of($blogs)
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['image', 'action'])
            ->toJson();
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        foreach (explode(' ', $blog->images) as $images) {
            Storage::delete($images);
        };
        Blog::destroy($id);
        return redirect()->route('blog');
    }
}
