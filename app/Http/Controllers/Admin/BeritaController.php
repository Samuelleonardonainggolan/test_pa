<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['berita'] = Berita::orderBy('berita_id', 'desc')->paginate(5);

        return view('admin.Berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'informasi_berita' => 'required',
            'informasi_alumni' => 'required'
        ]);

        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/img', $imageName);

        $Berita = new Berita;
        $Berita->informasi_berita = $request->informasi_berita;
        $Berita->informasi_alumni = $request->informasi_alumni;
        $Berita->image = $imageName;
        $Berita->save();

        return redirect('berita')
        ->with('success','Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $data['berita'] = Berita::find($id);

        return view('admin.Berita.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'informasi_berita' => 'required',
        'informasi_alumni' => 'required'
    ]);

    $Berita = Berita::find($id);

    // Check if a new image file was uploaded
    if ($request->hasFile('image')) {
        // Delete the old image file if it exists
        if ($Berita->image) {
            \Storage::delete('public/img/' . $Berita->image);
        }
        // Store the new image file
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/img', $imageName);
        $Berita->image = $imageName;
    }

    $Berita->informasi_berita = $request->informasi_berita;
    $Berita->informasi_alumni = $request->informasi_alumni;
    $Berita->save();

    return redirect('berita')
        ->with('success','Berita berhasil diupdate');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Berita = Berita::where('berita_id',$id)->delete();

        return redirect('berita')
            ->with('success','Berita dihapus.');
    }
}
