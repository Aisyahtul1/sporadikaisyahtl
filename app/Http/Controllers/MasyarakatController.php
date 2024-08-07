<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $mas = Masyarakat::all();
        return view('admin.masyarakat.index',compact('nomor','mas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.masyarakat.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mas = new Masyarakat;
        $mas->nik_mas = $request->nik_mas;
        $mas->nm_mas = $request->nm_mas;
        $mas->tgl_lahir = $request->tgl_lahir;
        $mas->umur_mas = $request->umur_mas;
        $mas->alamat = $request->alamat;
        $mas->jk = $request->jk;
        $mas->pekerjaan_mas = $request->pekerjaan_mas;
        $mas->password = bcrypt($request->password);
        $mas->save();

        return redirect('/masyarakat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mas = Masyarakat::find($id);
        return view('admin.masyarakat.edit',compact('mas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mas = new Masyarakat;
        $mas->nik_mas = $request->nik_mas;
        $mas->nm_mas = $request->nm_mas;
        $mas->tgl_lahir = $request->tgl_lahir;
        $mas->umur_mas = $request->umur_mas;
        $mas->alamat = $request->alamat;
        $mas->jk = $request->jk;
        $mas->pekerjaan_mas = $request->pekerjaan_mas;
        $mas->password = bcrypt($request->password);
        $mas->save();

        return redirect('/masyarakat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mas = Masyarakat::find($id);
        $mas->delete();

        return redirect('/masyarakat');
    }
}
