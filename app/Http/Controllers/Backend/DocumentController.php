<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DocumentController extends Controller
{
    public function index()
    {
        return view('back.document.index');
    }

    public function datatable()
    {
        $documents = Document::orderBy('created_at', 'desc');
        return datatables()->of($documents)
            ->addColumn('file', function (Document $document) {
                return '<a href="' . $document->getFile() . '" />' . $document->file . '</a>';
            })
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['file', 'action'])
            ->toJson();
    }

    public function create()
    {
        return view('back.document.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required'
        ]);

        $file = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file')->store('documents');
        }

        Document::create([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $file
        ]);

        return redirect()->route('document');
    }

    public function edit($id)
    {
        $document = Document::find($id);
        return view('back.document.edit', compact('document'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $document = Document::find($id);

        $file = $document->file ?? null;

        if ($request->hasFile('file')) {
            if ($document->file) {
                Storage::delete($document->file);
            }
            $file = $request->file('file')->store('documents');
        }
        $document->update([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $file
        ]);
        return redirect()->route('document');
    }
    public function delete($id)
    {
        $document = Document::find($id);
        Storage::delete($document->file);
        Document::destroy($id);
        return redirect()->route('document');
    }
}
