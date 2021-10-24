<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalControllers extends Controller
{
    public function index()
    {
        return "Menampilkan data animals";
    }

    public function store(Request $request)
    {
        return "Nama hewan: $request->nama" . '<br>' . "Menambahkan hewan baru";
    }

    public function update(Request $request, $id)
    {
        return "Nama hewan: $request->nama" . "<br>" . "Mengupdate data hewan id $id";
    }

    public function destroy($id)
    {
        return "Menghapus data hewan id $id";
    }
}
