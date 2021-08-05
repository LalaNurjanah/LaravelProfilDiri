<?php

namespace App\Http\Controllers\Api;

use App\Models\Pengalaman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pengalamancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengalaman = Pengalaman::all();

        return response()->json([
            'success' => true,
            'message'    => 'Daftar data pengalaman',
            'data'       => $pengalaman
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
            'keterangan' => 'required|unique:pengalaman|max:255',
            'deskripsi' =>'required',
            
        ]);

        $pengalaman = Pengalaman::create([
            'keterangan' =>$request->keterangan,
            'deskripsi' =>$request->deskripsi,
            
        ]);
            if ($pengalaman) {
                return response()->json([
                    'success' => true,
                    'message'    => 'Pengalaman Berhasil di tambahkan',
                    'data'       => $pengalaman
                ], 200);
            }else {
                return response()->json([
                    'success' => false,
                    'message'    => 'Pengalaman Gagal Ditambahkan ',
                    'data'       => $pengalaman
                ], 409); 
            }
    }
    public function show ($id)
    {
        $peng = Pengalaman::all();
        return response()-> json([
            'success' => true,
            'message'    => 'Detail Data Pengalaman ',
            'data'       => $peng
        ], 200); 
    }
    public function edit ($id)
    {
        $peng =Pengalaman::all();
        return response()-> json([
            'success' => true,
            'message'    => 'Detail Data Pengalaman ',
            'data'       => $peng
        ], 200); 
    }
        
        public function update(Request $request, $id)
        {
            $request->validate([
                'keterangan' => 'required|unique:pengalaman|max:255',
            'deskripsi' =>'required',
        ]);

            $P = Pengalaman:: find($id)->update([
                'keterangan' => $request->keterangan,
                'deskripsi'=> $request->deskripsi,
            ]);
                    return response()->json([
                        'success' => true,
                        'message'    => 'post update',
                        'data'       => $P ,
                    ], 200);
        }
        public function destroy($id)
        {
            $peng = Pengalaman::find($id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'data pengalaman berhasil di hapus',
                'data'    => $peng
            ], 200);
        }
        
    }
