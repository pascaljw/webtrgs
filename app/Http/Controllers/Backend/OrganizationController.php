<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organization = Organization::whereNotNull('organization')->first();
        if ($organization) {
            return view('back.organization.index', compact('organization'));
        } else {
            return view('back.organization.noorganization');
        }
    }

    public function create()
    {
        return view('back.organization.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'organization' => 'required',
        ]);

        Organization::create([
            'organization' => $request->organization,
        ]);

        return redirect()->route('organization');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'organization' => 'required',
        ]);
        $organization = Organization::find($id);
        $organization->update([
            'organization' => $request->organization,
        ]);
        return redirect()->route('organization');
    }
}
