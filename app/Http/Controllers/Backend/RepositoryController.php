<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Repository;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function index()
    {
        $repository = Repository::whereNotNull('repository')->first();
        if ($repository) {
            return view('back.academic.repository.index', compact('repository'));
        } else {
            return view('back.academic.repository.norepository');
        }
    }

    public function create()
    {
        return view('back.academic.repository.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'repository' => 'required',
        ]);

        Repository::create([
            'repository' => $request->repository,
        ]);

        return redirect()->route('repository');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'repository' => 'required',
        ]);
        $repository = Repository::find($id);
        $repository->update([
            'repository' => $request->repository,
        ]);
        return redirect()->route('repository');
    }
}
