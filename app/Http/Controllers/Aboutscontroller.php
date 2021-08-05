<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Aboutscontroller extends Controller
{
    
    public function index()
    {
        
        $abouts = Abouts::orderBy('id', 'desc')->paginate(3);
        return view('abouts.index', compact('abouts'));
    }

    public function create()
    {
        
        return view('abouts.create');
    }

    public function store (Request $request)
    {
        // validate the request...
        $request->validate([
            'keterangan' => 'required|unique:abouts|max:255',
            'foto' =>'required|img',
            'deskripsi' =>'required',
            
        ]);
        $abouts = new Abouts;
        
        $abouts->keterangan = $request->keterangan;
        $abouts->foto = $request->foto;
        $abouts->deskripsi = $request->deskripsi;

        $abouts->save();

        return redirect('/');
    }
    public function show($id)
    {
        $abouts= Abouts::where('id', $id)->first();
        return view ('abouts.show', ['abt' => $abouts]);
    }

    public function edit($id)
    {
        $abouts= Abouts::where('id', $id)->first();
        return view ('abouts.edit', ['abt' => $abouts]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|unique:abouts|max:255',
            'foto' =>'required|img',
            'deskripsi' =>'required',
           
        ]);
        Abouts::find($id)->update([
           'keterangan' => $request->keterangan,
           'foto' => $request->foto,
           'deskripsi'=> $request->deskripsi,
            
        ]);

        return redirect ('/');
    }
    public function destroy($id)
    {
        Abouts::find($id)->delete();
        return redirect ('/');
    }
}


