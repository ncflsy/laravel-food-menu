<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use Illuminate\Http\Request;

class makananController extends Controller
{
    public function index(Request $request)
    {
        $kategori = $request->input('kategori');
        $search = $request->input('search');

        $query = makanan::query();

        if ($kategori) {
            $query->where('kategori', $kategori);
        }

        if ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        }

        $data = $query->orderBy('id', 'asc')->get();

        return view('halamanMakanan', compact('data', 'kategori', 'search'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newMakananData = [
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
        ];

        $newMakanan = makanan::create($newMakananData);

        $allMakanan = makanan::orderBy('id', 'asc')->get();

        return view('halamanMakanan', compact('newMakanan', 'allMakanan'));
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
