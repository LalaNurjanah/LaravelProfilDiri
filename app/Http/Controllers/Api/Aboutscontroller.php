<?php

namespace App\Http\Controllers\Api;

use App\Models\Abouts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aboutscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = Abouts::all();

        return response()->json([
            'success' => true,
            'message'    => 'Daftar data abouts',
            'data'       => $abouts
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
            'keterangan' => 'required|unique:abouts|max:255',
            'foto' =>'required|img',
            'deskripsi' =>'required',
            
        ]);

        $abouts = Abouts::create([
            'keterangan' =>$request->keterangan,
            'foto' =>$request->foto,
            'deskripsi' =>$request->deskripsi,
            
        ]);
            if ($abouts) {
                return response()->json([
                    'success' => true,
                    'message'    => 'Abouts Berhasil di tambahkan',
                    'data'       => $abouts 
                ], 200);
            }else {
                return response()->json([
                    'success' => false,
                    'message'    => 'Abouts Gagal Ditambahkan ',
                    'data'       => $abouts 
                ], 409); 
            }
    }
    public function show ($id)
    {
        $abt = Abouts::all();
        return response()-> json([
            'success' => true,
            'message'    => 'Detail Data Abouts ',
            'data'       => $abt
        ], 200); 
    }
    public function edit ($id)
    {
        $abt = Abouts::all();
        return response()-> json([
            'success' => true,
            'message'    => 'Detail Data Abouts ',
            'data'       => $abt
        ], 200); 
    }
        
        public function update(Request $request, $id)
        {
            $request->validate([
                'keterangan' => 'required|unique:abouts|max:255',
            'foto' =>'required|img',
            'deskripsi' =>'required',
        ]);

            $A = Abouts:: find($id)->update([
                'keterangan' => $request->keterangan,
                'foto' => $request->foto,
                'deskripsi'=> $request->deskripsi,
            ]);
                    return response()->json([
                        'success' => true,
                        'message'    => 'post update',
                        'data'       => $A ,
                    ], 200);
        }
        public function destroy($id)
        {
            $abt = Abouts::find($id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'data abouts berhasil di hapus',
                'data'    => $abt
            ], 200);
        }
        
    }
