<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;
use App\Models\Supplier;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sepatu = Sepatu::all();
        return view('home.sepatu.index', compact('sepatu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        return view('home.sepatu.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sepatu::create([
            'nama_sepatu' => $request->nama_sepatu,
            'merk' => $request->merk,
            'stok' => $request->stok,
            'warna' => $request->warna,
            'id_supplier' => $request->id_supplier,
            $request->except(['_token'])
        ]);
        return redirect('/sepatu');
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
        $sepatu = Sepatu::find($id);
        $supplier = Supplier::all();
        return view('home.sepatu.edit', compact('sepatu', 'supplier'));
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
        $sepatu = Sepatu::find($id);
        $sepatu->update([
            'nama_sepatu' => $request->nama_sepatu,
            'merk' => $request->merk,
            'stok' => $request->stok,
            'warna' => $request->warna,
            'id_supplier' => $request->id_supplier,
            $request->except(['_token'])
        ]);
        return redirect('/sepatu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sepatu = Sepatu::find($id);
        return redirect('/sepatu');
    }
}
