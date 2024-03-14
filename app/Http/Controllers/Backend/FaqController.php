<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        return view('back.faq.index');
    }

    public function datatable()
    {
        $faqs = Faq::all();
        return datatables()->of($faqs)
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['action', 'question'])
            ->toJson();
    }

    public function create()
    {
        return view('back.faq.create');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('back.faq.edit', compact('faq'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->route('faq');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq = Faq::find($id);

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->route('faq');
    }

    public function delete($id)
    {
        Faq::destroy($id);
        return redirect()->route('faq');
    }
}
