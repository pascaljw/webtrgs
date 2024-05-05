<?php

namespace App\Http\Controllers\Backend;

use App\Models\TentangKami;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentang = TentangKami::first();
        if ($tentang) {
            return view('back.tentang.index', compact('tentang'));
        } else {
            return view('back.tentang.notentang');
        }
    }

    public function create()
    {
        return view('back.tentang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        TentangKami::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('admin.tentang.index')->with('Tentang Kami berhasil ditambahkan');
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $tentang = TentangKami::where('slug', $slug)->first();
        $tentang->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->back()->with('Tentang Kami berhasil diubah');
    }
}
