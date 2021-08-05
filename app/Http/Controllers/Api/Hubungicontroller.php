<?php

namespace App\Http\Controllers\Api;

use App\Models\Hubungi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Hubungicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hubungi = Hubungi::all();

        return response()->json([
            'success' => true,
            'message'    => 'Daftar data hubungi',
            'data'       => $hubungi
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:hubungi|max:255',
            'email' =>'required',
            'no_tlp' =>'required|numeric',
            'subjek' =>'required',
            'pesan' =>'required',
            
        ]);

        $hubungi = Hubungi::create([
            'nama' =>$request->nama,
            'email' =>$request->email,
            'no_tlp' =>$request->no_tlp,
            'subjek' =>$request->subjek,
            'pesan' =>$request->pesan,
        ]);
            if ($hubungi) {
                return response()->json([
                    'success' => true,
                    'message'    => 'Hubungi Berhasil di tambahkan',
                    'data'       => $hubungi
                ], 200);
            }else {
                return response()->json([
                    'success' => false,
                    'message'    => 'Hubungi Gagal Ditambahkan ',
                    'data'       => $hubungi
                ], 409); 
            }
    }
    public function show ($id)
    {
        $hub = Hubungi::all();
        return response()-> json([
            'success' => true,
            'message'    => 'Detail Data Hubungi ',
            'data'       => $hub
        ], 200); 
    }
    public function edit ($id)
    {
        $hub =Hubungi::all();
        return response()-> json([
            'success' => true,
            'message'    => 'Detail Data Hubungi ',
            'data'       => $hub
        ], 200); 
    }
        
        public function update(Request $request, $id)
        {
            $request->validate([
            'nama' => 'required|unique:hubungi|max:255',
            'email' =>'required',
            'no_tlp' =>'required|numeric',
            'subjek' =>'required',
            'pesan' =>'required',
        ]);

            $H = Hubungi:: find($id)->update([
                'nama' => $request->nama,
                'email'=> $request->email,
                'no_tlp' => $request->no_tlp,
                'subjek'=> $request->subjek,
                'pesan'=> $request->pesan,
            ]);
                    return response()->json([
                        'success' => true,
                        'message'    => 'post update',
                        'data'       => $H ,
                    ], 200);
        }
        public function destroy($id)
        {
            $hub = Hubungi::find($id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'data hubungi berhasil di hapus',
                'data'    => $hub
            ], 200);
        }
        
    }
