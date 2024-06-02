<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the refmensource.
     */
        

    public function menu()
    {
        $menuItems = MenuItem::all();;
        return view('menu', compact('menuItems'));
    }

    public function kembaliHome() {
        return "Hi";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('$menuItems.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required|string|max:255',
            'jenis_makanan' => 'required|string|max:255',
            'harga_makanan' => 'required|numeric',
            'jumlah_makanan' => 'required|integer',
            'stok' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $menuItems = new MenuItem($request->all());

        if ($request->hasFile('gambar')) {
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('images'), $imageName);
            $menuItems->gambar = $imageName;
        }

        $menuItems->save();

        return redirect()->route('menu.index')->with('success', 'Menu item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('menuitems.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menuItems->update($request->all());
        return redirect()->route('menuitems.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu->delete();
        return redirect()->route('menuitems.index');
    }
}
