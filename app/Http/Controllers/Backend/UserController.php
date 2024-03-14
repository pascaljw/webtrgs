<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('back.user.index');
    }

    public function datatable()
    {
        $users = User::all();
        return datatables()->of($users)
            ->addColumn('action', 'back.partials.datatable-action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function create()
    {
        return view('back.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($request->password != $request->password2) {
            return redirect()->route('user')->with('Password tidak cocok');
        }

        User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('user');
    }

    public function update(Request $request, $id)
    {
        // dd($request);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);
        $password = $user->password;

        if ($request->filled('password')) {
            if ($request->password != $request->password2) {
                return redirect()->route('user')->with('Password tidak cocok');
            }
            $password = $request->password;
        }

        $user->update([
            'name' => $request->name,
            'password' => $password,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect()->route('user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('back.user.edit', compact('user'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        User::destroy($id);
        return redirect()->route('user');
    }
}
