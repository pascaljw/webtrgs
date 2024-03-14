<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        if ($contact) {
            return view('back.contact.index', compact('contact'));
        } else {
            return view('back.contact.nocontact');
        }
    }

    public function create()
    {
        return view('back.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
        ]);

        Contact::create([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'coordinate' => $request->coordinate,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'tiktok' => $request->tiktok
        ]);

        return redirect()->route('contact');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
        ]);
        $contact = Contact::find($id);
        $contact->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'coordinate' => $request->coordinate,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'youtube' => $request->youtube,
            'tiktok' => $request->tiktok
        ]);
        return redirect()->back();
    }
}
