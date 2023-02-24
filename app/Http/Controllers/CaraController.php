<?php

namespace App\Http\Controllers;

use App\Models\cara;
use Illuminate\Http\Request;

class CaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model cara
        $cara = cara::all();
        return view('admin.cara.index', compact('cara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'judul' => 'required|unique:caras',
            'langkah' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        $cara = new cara();
        $cara->judul = $request->judul;
        $cara->langkah = $request->langkah;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/cara/', $name);
            $cara->gambar = $name;
        }
        $cara->save();
        return redirect()->route('cara.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cara = cara::findOrFail($id);
        return view('admin.cara.show', compact('cara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cara = cara::findOrFail($id);
        return view('admin.cara.edit', compact('cara'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([

            'judul' => 'required|max:255',
            'langkah' => 'required',
            'gambar' => '|image|max:2048',
        ]);

        $cara = cara::findOrFail($id);
        $cara->judul = $request->judul;
        $cara->langkah = $request->langkah;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/cara/', $name);
            $cara->gambar = $name;
        }

        $cara->save();
        return redirect()->route('cara.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cara = cara::findOrFail($id);
        $cara->delete();
        return redirect()->route('cara.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
