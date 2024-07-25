<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\kategori;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorekategoriRequest;
use App\Http\Requests\UpdatecustomerRequest;
use App\Http\Requests\UpdatekategoriRequest;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kategoris = DB::table('kategoris')->get();
        return view('dashboard.kategori', ['kategori' => $kategoris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kategori-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekategoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekategoriRequest $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();
        kategori::create($input);

        return redirect('/dashboard/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $kategori, $id)
    {
        $kategori = DB::table('kategoris')->where('id', $id)->first();
        return view('dashboard.kategori-edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekategoriRequest  $request
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekategoriRequest $request, kategori $kategori)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();
        $kategori->update($input);
        return redirect('/dashboard/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori $kategori, $id)
    {
        DB::table('kategoris')->where('id', $id)->delete();
        return redirect('/dashboard/kategori');
    }
}
