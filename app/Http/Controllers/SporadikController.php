<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sporadik;
use App\Models\Petugas;
use App\Models\Masyarakat;

class SporadikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $spo = Sporadik::all();
        return view('admin.sporadik.index',compact('nomor','spo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pet = Petugas::all();
        $mas = Masyarakat::all();
        return view('admin.sporadik.form',compact('mas','pet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $spo = new Sporadik;
        $spo->no_skt = $request->no_skt;
        $spo->masyarakats_id = $request->masyarakat;
        $spo->ukt_timur = $request->ukt_timur;
        $spo->ukt_barat = $request->ukt_barat;
        $spo->ukt_selatan = $request->ukt_selatan;
        $spo->ukt_utara = $request->ukt_utara;
        $spo->kepala_desa = $request->kepala_desa;
        $spo->petugas_id = $request->petugas;
        $spo->save();

        return redirect('/sporadik');
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
        $spo = Sporadik::find($id);
        $mas = Masyarakat::all(); 
        $pet = Petugas::all(); 
        return view('admin.sporadik.edit', compact('spo', 'mas', 'pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $spo =  Sporadik::find($id);
        $spo->no_skt = $request->no_skt;
        $spo->masyarakats_id = $request->masyarakat;
        $spo->ukt_timur = $request->ukt_timur;
        $spo->ukt_barat = $request->ukt_barat;
        $spo->ukt_selatan = $request->ukt_selatan;
        $spo->ukt_utara = $request->ukt_utara;
        $spo->kepala_desa = $request->kepala_desa;
        $spo->petugas_id = $request->petugas;
        $spo->save();
        
        return redirect('/sporadik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $spo = Sporadik::find($id);
        $spo->delete();

        return redirect('/sporadik');
    }
}
