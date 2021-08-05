<?php

namespace App\Http\Controllers;

use App\Models\Hubungi;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Hubungicontroller extends Controller
{
    
    public function index()
    {
        
        $hubungi = Hubungi::orderBy('id', 'desc')->paginate(3);
        return view('hubungi.index', compact('hubungi'));
    }

    public function create()
    {
        
        return view('hubungi.create');
    }

    public function store (Request $request)
    {
        // validate the request...
        $request->validate([
            'nama' => 'required|unique:hubungi|max:255',
            'email' => 'required',
            'no_tlp' =>'required|numeric',
            'subjek' => 'required',
            'pesan' => 'required'
        ]);
        $hubungi = new Hubungi;
        
        $hubungi->nama = $request->nama;
        $hubungi->email = $request->email;
        $hubungi->no_tlp = $request->no_tlp;
        $hubungi->subjek = $request->subjek;
        $hubungi->pesan = $request->pesan;

        $hubungi->save();

        return redirect('/');
    }
    public function show($id)
    {
        $hubungi= Hubungi::where('id', $id)->first();
        return view ('hubungi.show', ['hub' => $hubungi]);
    }

    public function edit($id)
    {
        $hubungi= Hubungi::where('id', $id)->first();
        return view ('hubungi.edit', ['hub' => $hubungi]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:hubungi|max:255',
            'email' => 'required',
            'no_tlp' =>'required|numeric',
            'subjek' => 'required',
            'pesan' => 'required',
        ]);
        Hubungi::find($id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        return redirect ('/');
    }
    public function destroy($id)
    {
        Hubungi::find($id)->delete();
        return redirect ('/');
    }
}


