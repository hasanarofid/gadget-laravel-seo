<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdategalleryRequest;
use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = gallery::where('kategori', 'section-musik')->get();
        return view('dashboard.musik.index', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artikel = DB::table('artikel')->get();
        return view('dashboard.musik.tambah', compact('artikel'));
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
            'kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Gallery::create($input);

        return redirect(route('musik.index'));
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
        return view('dashboard.musik.edit', compact('gallery', 'artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategalleryRequest $request)
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
        $gallery->kategori = 'section-musik';
        if (isset($input['image'])) {
            $gallery->image = $input['image'];
        }
        if (isset($input['artikel_id'])) {
            $gallery->artikel_id = $input['artikel_id'];
        }   

        $gallery->save();
        return redirect(route('musik.index'));
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
        return redirect(route('musik.index'));
    }
}
