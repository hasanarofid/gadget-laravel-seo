<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submenu = SubMenu::with('menu','artikel')->get();
        return view('dashboard.submenu.index', ['submenu' => $submenu]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::get();
        $artikel = Artikel::get();
        return view('dashboard.submenu.create',compact(
            'menu','artikel'
        ));

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
            'sub' => 'required',
            'slug' => 'required',
        ]);

        $input = $request->all();
        SubMenu::create($input);

        return redirect('/dashboard/submenu');
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
        $submenu = SubMenu::where('id', $id)->first();
        $menu = Menu::get();
        $artikel = Artikel::get();
        return view('dashboard.submenu.edit',compact(
           'submenu', 'menu','artikel'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubMenu $submenu)
    {
        $request->validate([
            'sub' => 'required',
            'slug' => 'required',
        ]);

        $input = $request->all();
        // dd($menu);
        $submenu->update($input);
        return redirect('/dashboard/submenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubMenu::where('id', $id)->delete();
        return redirect('/dashboard/submenu');
    }
}
