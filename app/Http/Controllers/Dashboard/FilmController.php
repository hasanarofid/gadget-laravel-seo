<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdategalleryRequest;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = gallery::where('kategori', 'section-film')->get();
        return view('dashboard.film.index', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel = DB::table('artikel')->get();
        return view('dashboard.film.tambah', compact('artikel'));
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
            'name' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $galleryData = [
            'name' => $input['name'],
            'title' => $input['title'],
            'kategori' => 'section-film',
        ];

        if (isset($input['image'])) {
            $galleryData['image'] = $input['image'];
        }

        if (isset($input['artikel_id'])) {
            $galleryData['artikel_id'] = $input['artikel_id'];
        }

        gallery::create($galleryData);

        return redirect(route('film.index'));
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
        $artikel = DB::table('artikel')->get();
        $gallery = DB::table('galleries')->where('id', $id)->first();
        return view('dashboard.film.edit', compact('gallery', 'artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
        $gallery->kategori = 'section-film';
        if (isset($input['image'])) {
            $gallery->image = $input['image'];
        }
        if (isset($input['artikel_id'])) {
            $gallery->artikel_id = $input['artikel_id'];
        }

        $gallery->save();
        return redirect(route('film.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('galleries')->where('id', $id)->delete();
        return redirect(route('film.index'));
    }
}
