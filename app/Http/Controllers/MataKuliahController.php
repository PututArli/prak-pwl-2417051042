<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => MataKuliah::all(),
        ];
        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mk' => ['required', 'string', 'max:100'],
            'sks' => ['required', 'integer', 'min:1', 'max:6'],
        ]);

        MataKuliah::create($validated);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);
        return view('edit_mk', ['title' => 'Edit Mata Kuliah', 'mk' => $mk]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_mk' => ['required', 'string', 'max:100'],
            'sks' => ['required', 'integer', 'min:1', 'max:6'],
        ]);

        $mk = MataKuliah::findOrFail($id);
        $mk->update($validated);

        return redirect()->to('/matakuliah')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->delete();

        return redirect()->to('/matakuliah')->with('success', 'Data berhasil dihapus!');
    }
}