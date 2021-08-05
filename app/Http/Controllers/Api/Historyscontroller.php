<?php

namespace App\Http\Controllers\Api;

use App\Models\Historys;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Historyscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historys = Historys::all();

        return response()->json([
            'success' => true,
            'message'    => 'Daftar data historys',
            'data'       => $historys
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
            'keterangan' => 'required|unique:historys|max:255',
            'deskripsi' =>'required',
            
        ]);

        $historys = Historys::create([
            'keterangan' =>$request->keterangan,
            'deskripsi' =>$request->deskripsi,
            
        ]);
            if ($historys) {
                return response()->json([
                    'success' => true,
                    'message'    => 'Historys Berhasil di tambahkan',
                    'data'       => $historys 
                ], 200);
            }else {
                return response()->json([
                    'success' => false,
                    'message'    => 'Historys Gagal Ditambahkan ',
                    'data'       => $historys 
                ], 409); 
            }
    }
    public function show ($id)
    {
        $history = Historys::all();
        return response()-> json([
            'success' => true,
            'message'    => 'Detail Data Historys ',
            'data'       => $history
        ], 200); 
    }
    public function edit ($id)
    {
        $history =Historys::all();
        return response()-> json([
            'success' => true,
            'message'    => 'Detail Data Historys ',
            'data'       => $history
        ], 200); 
    }
        
        public function update(Request $request, $id)
        {
            $request->validate([
                'keterangan' => 'required|unique:historys|max:255',
            'deskripsi' =>'required',
        ]);

            $H = Historys:: find($id)->update([
                'keterangan' => $request->keterangan,
                'deskripsi'=> $request->deskripsi,
            ]);
                    return response()->json([
                        'success' => true,
                        'message'    => 'post update',
                        'data'       => $H ,
                    ], 200);
        }
        public function destroy($id)
        {
            $history = Historys::find($id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'data historys berhasil di hapus',
                'data'    => $history
            ], 200);
        }
        
    }
