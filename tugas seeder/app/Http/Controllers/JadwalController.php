<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dataJadwal = Jadwal::all();
        $dataJadwal = Jadwal::with(['dosen','matakuliah'])->get();
        return view('pages.jadwal.jadwal', compact('dataJadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.jadwal.form-jadwal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_matakuliah' => 'required|exists:matakuliah,kode_matakuliah',
            'nidn'            => 'required|exists:dosen,nidn',
            'kelas'           => 'required|in:A,B,C,D,E',
            'hari'            => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
            'jam'             => 'required|date',
        ]);
        // $validated['jam'] = now()->format('Y-m-d') . ' ' . $request->jam . ':00';
        $validated['jam'] = str_replace('T', ' ', $request->jam) . ':00';
        // $validated['nidn'] = 1;
        Jadwal::create($validated);
        return redirect()->route('jadwal')->with('add', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailjadwal = Jadwal::findOrFail($id);

        return view('pages.jadwal.detail-jadwal', compact('detailjadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataJadwal = Jadwal::where('id', $id)->firstOrFail();
        return view('pages.jadwal.form-edit-jadwal', compact('dataJadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_matakuliah' => 'required|exists:matakuliah,kode_matakuliah',
            'nidn'            => 'required|exists:dosen,nidn',
            'kelas'           => 'required|in:A,B,C,D,E',
            'hari'            => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
            'jam'             => 'required|date',
        ]);
        $validated['jam'] = str_replace('T', ' ', $request->jam) . ':00';
        // $validated['id'] = 1;
        Jadwal::where('id', $id)->update($validated);
        return redirect()->route('jadwal')->with('update', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jadwal::where('id', $id)->delete();

        return redirect()->route('jadwal')->with('delete', 'Data berhasil dihapus');
    }
}
