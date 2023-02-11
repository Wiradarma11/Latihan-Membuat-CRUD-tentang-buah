<?php

namespace App\Http\Controllers;

use App\Models\buah;
use Illuminate\Http\Request;


class BuahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = buah::orderBy('no_buah','desc')->get();
        return view('buah.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama'=>'required',
            'gambar'=>'required|mimes:jpg,jpeg,bmp,png|max:10000',
        ],[
            'nama.required'=>'Nama Buah Harus di Isi',
            'gambar.required'=>'Gambar Buah Harus di Isi',
        ]);
        $data = [
            'nama'=>$request->nama,
            'gambar'=>$request->gambar,
        ];
        buah::create($data);
        return redirect()->to('buah')->with('success', 'Berhasil menambahkan data buah');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = buah::where('nama', $id)->first();
        return view('buah.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=>'required',
            'gambar'=>'required|mimes:jpg,jpeg,bmp,png|max:1034',
        ],[
            'nama.required'=>'Nama Buah Harus di Isi',
            'gambar.required'=>'Gambar Buah Harus di Isi',
        ]);
        $data = [
            'nama'=>$request->nama,
            'gambar'=>$request->gambar,
        ];
        buah::where('nama', $id)->update($data);
        return redirect()->to('buah')->with('success', 'Berhasil melakukan update data buah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        buah::where('nama', $id)->delete();
        return redirect()->to('buah')->with('success', 'Berhasil melakukan delete data buah');
    }
}
