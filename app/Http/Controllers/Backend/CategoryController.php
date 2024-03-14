<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        return view('back.categories.index');
    }


    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->back()->with('Kategori berhasil ditambahkan');
    }

    public function edit(Category $id)
    {
        $category = Category::find($id);
        return view('back.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->route('category')->with('Kategori berhasil di-update');
    }

    public function delete($id)
    {
        Category::destroy($id);
        return redirect()->back();
    }

    public function datatable()
    {
        $categories = Category::all();

        return datatables()->of($categories)
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->toJson();
    }
}
