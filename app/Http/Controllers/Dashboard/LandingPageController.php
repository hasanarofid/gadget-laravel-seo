<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdategalleryRequest;
use App\Models\Artikel;
use App\Models\gallery;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = gallery::where('kategori', 'section-landing-page')->get();
        return view('dashboard.landingpage.index', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::get();
        $gallery = gallery::where('id', $id)->first();
        return view('dashboard.landingpage.edit', compact('gallery', 'artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategalleryRequest  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategalleryRequest $request, gallery $gallery)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'kategori' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $gallery = Gallery::find($request->id);
        if (!$gallery) {
            return redirect()->back()->withErrors(['msg' => 'Gallery not found.']);
        }

        $gallery->name = $input['name'];
        $gallery->title = $input['title'];
        $gallery->kategori = 'section-landing-page';
        if (isset($input['image'])) {
            $gallery->image = $input['image'];
        }
        if (isset($input['artikel_id'])) {
            $gallery->artikel_id = $input['artikel_id'];
        }   

        $gallery->save();
        return redirect(route('landingpage.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artikel::where('id', $id)->delete();
        return redirect('/dashboard/artikel');
    }
}
