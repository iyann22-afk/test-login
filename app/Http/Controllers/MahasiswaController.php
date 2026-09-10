<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // READ - Tampilkan semua data
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(10);
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // CREATE - Form tambah
    public function create()
    {
        return view('mahasiswa.create');
    }

    // CREATE - Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nim'             => 'required|unique:mahasiswas,nim|max:20',
            'nama_mahasiswa'  => 'required|max:100',
            'tempat_lahir'    => 'required|max:50',
            'tanggal_lahir'   => 'required|date',
            'jenis_kelamin'   => 'required|in:Laki-laki,Perempuan',
            'alamat'          => 'required',
            'program_studi'   => 'required|max:100',
            'nomor_hp'        => 'required|max:15',
            'email'           => 'required|email|unique:mahasiswas,email|max:100',
        ], [
            'nim.required'            => 'NIM wajib diisi.',
            'nim.unique'              => 'NIM sudah terdaftar.',
            'nama_mahasiswa.required' => 'Nama mahasiswa wajib diisi.',
            'email.unique'            => 'Email sudah terdaftar.',
            'email.email'             => 'Format email tidak valid.',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    // READ - Detail satu data
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    // UPDATE - Form edit
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // UPDATE - Simpan perubahan
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim'             => 'required|max:20|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama_mahasiswa'  => 'required|max:100',
            'tempat_lahir'    => 'required|max:50',
            'tanggal_lahir'   => 'required|date',
            'jenis_kelamin'   => 'required|in:Laki-laki,Perempuan',
            'alamat'          => 'required',
            'program_studi'   => 'required|max:100',
            'nomor_hp'        => 'required|max:15',
            'email'           => 'required|email|max:100|unique:mahasiswas,email,' . $mahasiswa->id,
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    // DELETE
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}