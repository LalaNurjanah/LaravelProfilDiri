<?php

namespace App\Http\Controllers;

use App\Models\Historys;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Historyscontroller extends Controller
{
    
    public function index()
    {
        
        $historys = Historys::orderBy('id', 'desc')->paginate(3);
        return view('historys.index', compact('historys'));
    }

    public function create()
    {
        
        return view('historys.create');
    }

    public function store (Request $request)
    {
        // validate the request...
        $request->validate([
            'keterangan' => 'required|unique:historys|max:255',
            'deskripsi' =>'required',
            
        ]);
        $historys = new Historys;
        
        $historys->keterangan = $request->keterangan;
        $historys->deskripsi = $request->deskripsi;

        $historys->save();

        return redirect('/');
    }
    public function show($id)
    {
        $historys= Historys::where('id', $id)->first();
        return view ('historys.show', ['history' => $historys]);
    }

    public function edit($id)
    {
        $historys=Historys::where('id', $id)->first();
        return view ('historys.edit', ['history' => $historys]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|unique:historys|max:255',
          
            'deskripsi' =>'required',
           
        ]);
        Historys::find($id)->update([
           'keterangan' => $request->keterangan,
           
           'deskripsi'=> $request->deskripsi,
            
        ]);

        return redirect ('/');
    }
    public function destroy($id)
    {
        Historys::find($id)->delete();
        return redirect ('/');
    }
}


