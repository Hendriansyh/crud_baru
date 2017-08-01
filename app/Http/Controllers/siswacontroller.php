<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\orangtua;
class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswas=siswa::all();
        return view('siswa.index',compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ortu=orangtua::all();
        return view('siswa.create',compact('ortu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $ortu= new siswa;
        $ortu->nama=$request->a;
        $ortu->orangtua_id=$request->b;
        $ortu->jk=$request->c;
        $ortu->alamat=$request->e;
        $ortu->save();
        return redirect ('siswa');
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
        $siswas = siswa::findOrFail($id);
        $ortu = orangtua::all();
        return view('siswa.show',compact('siswas','ortu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $siswas = siswa::findOrFail($id);
        $ortu = orangtua::all();
        return view('siswa.edit',compact('siswas','ortu'));
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
        //
         $siswa= siswa::findOrFail($id);
        $siswa->nama=$request->a;
        $siswa->orangtua_id=$request->b;
        $siswa->alamat=$request->e;
        $siswa->save();
        return redirect ('siswa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
                $siswas=siswa::findOrFail($id);
        $siswas->delete();
        return redirect('siswa');
    }
}
