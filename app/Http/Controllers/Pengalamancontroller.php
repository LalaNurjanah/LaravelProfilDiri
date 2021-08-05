<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Pengalamancontroller extends Controller
{
    
    public function index()
    {
        
        $pengalaman =Pengalaman::orderBy('id', 'desc')->paginate(3);
        return view('pengalaman.index', compact('pengalaman'));
    }

    public function create()
    {
        
        return view('pengalaman.create');
    }

    public function store (Request $request)
    {
        // validate the request...
        $request->validate([
            'keterangan' => 'required|unique:pengalaman|max:255',
            'deskripsi' =>'required',
            
        ]);
        $pengalaman = new Pengalaman;
        
        $pengalaman->keterangan = $request->keterangan;
        $pengalaman->deskripsi = $request->deskripsi;

        $pengalaman->save();

        return redirect('/');
    }
    public function show($id)
    {
        $pengalaman= Pengalaman::where('id', $id)->first();
        return view ('pengalaman.show', ['peng' => $pengalaman]);
    }

    public function edit($id)
    {
        $pengalaman=Pengalaman::where('id', $id)->first();
        return view ('pengalaman.edit', ['peng' => $pengalaman]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|unique:pengalaman|max:255',
          
            'deskripsi' =>'required',
           
        ]);
       Pengalaman::find($id)->update([
           'keterangan' => $request->keterangan,
           
           'deskripsi'=> $request->deskripsi,
            
        ]);

        return redirect ('/');
    }
    public function destroy($id)
    {
        Pengalaman::find($id)->delete();
        return redirect ('/');
    }
}


