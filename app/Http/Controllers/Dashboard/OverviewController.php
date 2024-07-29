<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Overviewtipe;
use App\Models\Produk;
use App\Models\Tipe;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Overviewtipe::get();
        return view('dashboard.overviewtipe.index', 
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
        $modelTipe = Kategori::get();
        return view('dashboard.overviewtipe.create',compact('modelProduk','modelTipe'));
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
            'title' => 'required',
            'kategori_id' => 'required',
            'landing' => 'required'
        ]);

        $input = $request->all();
        if ($image = $request->file('landing')) {
            $destinationPath = 'landing/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['landing'] = "$profileImage";
        }

        $galleryData = [
            'title' => $input['title'],
            'produk_id' => $input['produk_id'],
            'kategori_id' => $input['kategori_id'],
            'landing' => $input['landing'],
            'diskipsi' => $input['diskipsi'],
        ];

        Overviewtipe::create($galleryData);

        return redirect('/dashboard/overview');
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
        $modelTipe = Kategori::get();
        $model = Overviewtipe::find($id);
        return view('dashboard.overviewtipe.edit',compact('modelProduk','modelTipe','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Overviewtipe $Overviewtipe)
    {
        $request->validate([
            'title' => 'required',
            'kategori_id' => 'required',
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
            if ($Overviewtipe->landing && file_exists(public_path($Overviewtipe->landing))) {
                unlink(public_path($Overviewtipe->landing));
            }
        } else {
            // If no new image is uploaded, retain the existing image path
            unset($input['landing']);
        }
    
        $Overviewtipe->update($input);
    
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
        Overviewtipe::where('id', $id)->delete();
        return redirect('/dashboard/overview');
    }

    public function getCategories($produkId)
    {
        $categories = Tipe::where('produk_id', $produkId)->get();
       

        return response()->json($categories);
    }
}
