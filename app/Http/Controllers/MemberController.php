<?php

namespace App\Http\Controllers;

use App\Models\Informasi;



class MemberController extends Controller
{
    public function index()
    {
        //menampilkan semua data dari model loker
        $informasi = informasi::all();
        return view('welcome', compact( 'informasi'));
    }

    public function langkah(){
        $informasi = informasi::all();
        return view('langkah',compact('informasi'));
    }

    public function tanaman(){
        $informasi = informasi::all();
        return view('tanaman',compact('informasi'));
    }
    // public function detail(Loker $loker)
    // {
    //     $loker = loker::find($loker->id);
    //     return view('detail', [
    //         'loker' => $loker,
    //     ]);

    // }
    // public function detail($id)
    // {
        
    // }
    // public function artikel(informasi $informasi)
    // {

    //     $informasi = informasi::find($informasi->id);
    //     return view('artikel', [
    //         'informasi' => $informasi,
    //     ]);

    // }
    public function artikel($id)
    {
        $informasi = Informasi::find($id);
        return view('artikel', ['informasi' => $informasi]);
    }
}
