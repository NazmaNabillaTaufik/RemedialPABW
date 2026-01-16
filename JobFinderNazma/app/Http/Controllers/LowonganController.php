<?php
namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
        public function index() {
        $lowongans = Lowongan::all();
        return view('lowongan.index', compact('lowongans'));
    }

    public function store(Request $request) {
        $request->validate([
            'posisi' => 'required|string',
            'perusahaan' => 'required|string',
            'lokasi_kerja' => 'required|string',
            'gaji' => 'nullable|integer',
        ]);

        Lowongan::create($request->all());
        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil ditambah');
    }

    public function update(Request $request, Lowongan $lowongan) {
        $lowongan->update($request->all());
        return redirect()->route('lowongan.index')->with('success', 'Lowongan diperbarui');
    }

    public function destroy(Lowongan $lowongan) {
        $lowongan->delete();
        return redirect()->route('lowongan.index')->with('success', 'Lowongan dihapus');
    }
    
}