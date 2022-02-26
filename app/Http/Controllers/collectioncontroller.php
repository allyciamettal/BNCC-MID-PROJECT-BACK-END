<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\library;

class collectioncontroller extends Controller
{
    public function idx()
    {
        $library = library::all();
        return view('collection', compact('library'));
    }

    public function manage()
    {
        $library = library::all();
        return view('library/idx', compact('library'));
    }

    public function add()
    {
        return view('library/add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'=> 'required|string|min:5|max:20',
            'penulis'=> 'required|string|min:5|max:20',
            'jumlah_halaman'=> 'required|integer|min:1',
            'tahun_terbit'=> 'required|integer|min:2000|max:2021',
        ]);


      library::create([
        'judul'=>$request->judul,
        'penulis'=>$request->penulis,
        'jumlah_halaman'=>$request->jumlah_halaman,
        'tahun_terbit'=>$request->tahun_terbit,
      ]);
       
       return redirect('collection/manage') -> with('inputsuccess', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $library = library::findOrFail($id);
       return view('library/edit', compact('library'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul'=> 'required|string|min:5|max:20',
            'penulis'=> 'required|string|min:5|max:20',
            'jumlah_halaman'=> 'required|integer|min:1',
            'tahun_terbit'=> 'required|integer|min:2000|max:2021',
        ]);

        $library = library::findOrFail($id);
      $library->update([
        'judul'=>$request->judul,
        'penulis'=>$request->penulis,
        'jumlah_halaman'=>$request->jumlah_halaman,
        'tahun_terbit'=>$request->tahun_terbit,
      ]);

      return redirect('collection/manage') -> with('inputsuccess', 'Data berhasil dirubah');
    }

    public function delete($id){
        $library = library::destroy($id);
       return redirect('collection/manage') -> with('inputsuccess', 'Data berhasil dihapus');
    }
   
}
