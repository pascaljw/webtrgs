<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Academic;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Academic::whereNotNull('service')->first();
        if ($service) {
            return view('back.academic.service.index', compact('service'));
        } else {
            return view('back.academic.service.noservice');
        }
    }

    public function create()
    {
        return view('back.academic.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required',
        ]);

        Academic::create([
            'service' => $request->service,
        ]);

        return redirect()->route('service');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service' => 'required',
        ]);
        $service = Academic::find($id);
        $service->update([
            'service' => $request->service,
        ]);
        return redirect()->route('service');
    }
}
