<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Tipe;
use Illuminate\Http\Request;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Tipe::get();
        // dd($model);die;
        return view('dashboard.tipe.index', 
        ['model' => $model]);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelProduk = Produk::get();
        return view('dashboard.tipe.create',compact('modelProduk'));
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
            'produk_id' => 'required',
            'nama' => 'required',
            'slug' => 'required',
        ]);

        $input = $request->all();
    

        $galleryData = [
            'produk_id' => $input['produk_id'],
            'nama' => $input['nama'],
            'slug' => $input['slug'],
        ];

        Tipe::create($galleryData);

        return redirect('/dashboard/tipe');
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
        $modelProduk = Produk::get();
        $model = Tipe::find($id);
        return view('dashboard.tipe.edit',compact('modelProduk','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipe $tipe)
    {
        $request->validate([
            'title' => 'required',
            'produk_id' => 'required', // Ensure produk_id is also validated
            'landing' => 'nullable|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi|max:2048' // Make the landing field nullable
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('landing')) {
            $destinationPath = 'landing/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $profileImage);
            $input['landing'] = $profileImage;
    
            // Delete old image if exists
            if ($tipe->landing && file_exists(public_path($tipe->landing))) {
                unlink(public_path($tipe->landing));
            }
        } else {
            // If no new image is uploaded, retain the existing image path
            unset($input['landing']);
        }
    
        $tipe->update($input);
    
        return redirect('/dashboard/overview')
                     ->with('success', 'OverviewProduk updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipe::where('id', $id)->delete();
        return redirect('/dashboard/overview');
    }

    public function getCategories($produkId)
    {
        $ketegori = Produk::where('id', $produkId)->first(); // Adjust according to your model and relationship
        $categories = Produk::where('kategori', $ketegori)->get();
        $produks = Produk::with('kategori')->select('produk.nama as namaProduk', 'produk.id', 'kategori.nama as namakategori')
        ->leftJoin('kategori', 'produk.kategori_id', '=', 'kategori.id')
        ->where()
        ->get();

        return response()->json($categories);
    }
}
