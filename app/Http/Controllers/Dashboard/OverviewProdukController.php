<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Overviewproduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class OverviewProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Overviewproduk::get();
        return view('dashboard.overviewproduk.index', 
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
        return view('dashboard.overviewproduk.create',compact('modelProduk'));
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
            'landing' => $input['landing'],
            'diskipsi' => $input['diskipsi'],
        ];

        Overviewproduk::create($galleryData);

        return redirect('/dashboard/overviewProduk');
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
        $model = Overviewproduk::find($id);
        return view('dashboard.overviewproduk.edit',compact('modelProduk','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Overviewproduk $overviewproduk)
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
            if ($overviewproduk->landing && file_exists(public_path($overviewproduk->landing))) {
                unlink(public_path($overviewproduk->landing));
            }
        } else {
            // If no new image is uploaded, retain the existing image path
            unset($input['landing']);
        }
    
        $overviewproduk->update($input);
    
        return redirect('/dashboard/overviewProduk')
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
        Overviewproduk::where('id', $id)->delete();
        return redirect('/dashboard/overviewProduk');
    }
}
