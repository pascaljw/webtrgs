<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $heros = Hero::all();
        return view('back.hero.index', compact('heros'));
    }

    public function create()
    {
        return view('back.hero.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:3',
            'detail' => 'required',
            'image' => 'required',
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images');
        }

        Hero::create([
            'title' => $request->title,
            'detail' => $request->detail,
            'image' => $image
        ]);

        return redirect()->route('hero');
    }
}
