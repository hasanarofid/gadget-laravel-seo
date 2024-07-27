<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreprodukRequest;
use App\Http\Requests\UpdateprodukRequest;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::with('kategori')->select('produk.nama as namaProduk', 'produk.id', 'kategori.nama as namakategori')
        ->leftJoin('kategori', 'produk.kategori_id', '=', 'kategori.id')
        ->get();

        // mengirim data blog ke view 
        return view('dashboard.produk', ['produk' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori =  DB::table('kategoris')->get();
        return view('dashboard.produk-add', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprodukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprodukRequest $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'name' => 'required',
        ]);

        produk::create([
            'id_kategori' => $request->id_kategori,
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => null,
        ]);
        return redirect('/dashboard/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk, $id)
    {
        $kategori =  DB::table('kategoris')->get();
        $produk = DB::table('produks')->where('id', $id)->first();
        return view('dashboard.produk-edit', ['kategori' => $kategori, 'produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprodukRequest  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprodukRequest $request, produk $produk)
    {
        $request->validate([
            'name' => 'required',
            'id_kategori' => 'required',
        ]);

        $input = $request->all();
        $produk->update($input);
        return redirect('/dashboard/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk, $id)
    {
        DB::table('produks')->where('id', $id)->delete();
        return redirect('/dashboard/produk');
    }
}
