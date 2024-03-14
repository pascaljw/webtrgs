<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        return view('back.slider.index');
    }

    public function create()
    {
        return view('back.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
            'image' => 'required',
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images');
        }

        Slider::create([
            'title' => $request->title,
            'content' => $request->content,
            'link' => $request->link,
            'image' => $image
        ]);

        return redirect()->route('slider');
    }

    public function datatable()
    {
        $sliders = Slider::orderBy('created_at', 'desc')->get();

        return datatables()->of($sliders)
            ->addColumn('image', function (Slider $slider) {
                return '<img src="' . $slider->getImage() . '" height="150px"/>';
            })
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['image', 'action'])
            ->toJson();
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('back.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'          => 'required|min:3',
            'content'       => 'required',
        ]);

        $slider = Slider::find($id);

        $image = $slider->image ?? null;

        if ($request->hasFile('image')) {
            if ($slider->image) {
                Storage::delete($slider->image);
            }
            $image = $request->file('image')->store('images');
        }
        $slider->update([
            'title' => $request->title,
            'content' => $request->content,
            'link' => $request->link,
            'image' => $image
        ]);
        return redirect()->route('slider');
    }

    public function delete($id)
    {
        $slider = Slider::find($id);
        Storage::delete($slider->image);
        Slider::destroy($id);
        return redirect()->route('slider');
    }
}
