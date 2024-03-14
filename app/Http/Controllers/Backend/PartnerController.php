<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PartnerController extends Controller
{
    public function index()
    {
        return view('back.partner.index');
    }

    public function create()
    {
        return view('back.partner.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|min:3',
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('partner');
        }

        Partner::create([
            'name' => $request->name,
            'image' => $image,
            'edu' => $request->edu,
            'letter' => $request->letter,
            'start' => $request->start,
            'end' => $request->end,
            'description' => $request->description
        ]);

        return redirect()->route('partner');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required|min:3',
        ]);

        $partner = Partner::find($id);
        $image = $partner->image ?? null;

        if ($request->hasFile('image')) {
            if ($partner->image) {
                Storage::delete($partner->image);
            }
            $image = $request->file('image')->store('partner');
        }

        $partner->update([
            'name' => $request->name,
            'image' => $image,
            'edu' => $request->edu,
            'letter' => $request->letter,
            'start' => $request->start,
            'end' => $request->end,
            'description' => $request->description
        ]);
        return redirect()->route('partner');
    }

    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('back.partner.edit', compact('partner'));
    }

    public function datatable()
    {
        $partners = Partner::orderBy('created_at', 'desc')->get();

        return datatables()->of($partners)
            ->addColumn('image', function (Partner $partner) {
                return '<img src="' . $partner->getImage() . '" height="150px"/>';
            })
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['image', 'action'])
            ->toJson();
    }

    public function delete(Partner $partner)
    {
        Storage::delete($partner->image);
        Partner::destroy($partner);
        return redirect()->route('partner');
    }
}
