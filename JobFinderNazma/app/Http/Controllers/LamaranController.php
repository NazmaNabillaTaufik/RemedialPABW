<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class LamaranController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $lamarans = Lamaran::with(['user', 'lowongan'])->get();
        } else {
            $lamarans = Lamaran::where('user_id', Auth::id())
                ->with('lowongan')
                ->get();
        }

       return view('lamarans.index', compact('lamarans'));
    }

    public function create($lowongan_id)
{
    $lowongan = Lowongan::findOrFail($lowongan_id);
    return view('lamarans.create', compact('lowongan'));
}

    /**
     * Menyimpan lamaran + upload CV
     */
    public function store(Request $request)
    {
        $request->validate([
            'lowongan_id'        => 'required|exists:lowongans,id',
            'deskripsi_lamaran'  => 'required|string',
            'cv_file'            => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        // Upload file CV
        $fileName = time() . '_' . $request->file('cv_file')->getClientOriginalName();
        $request->file('cv_file')->storeAs('public/cv', $fileName);

        // Simpan data lamaran
        Lamaran::create([
            'user_id'           => Auth::id(),
            'lowongan_id'       => $request->lowongan_id,
            'deskripsi_lamaran' => $request->deskripsi_lamaran,
            'cv_file'           => $fileName,
        ]);

        return redirect()
            ->route('lamaran.index')
            ->with('success', 'Berhasil melamar pekerjaan');
    }

    /**
     * Menghapus lamaran (ADMIN SAJA)
     */
    public function destroy(Lamaran $lamaran)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        // Hapus file CV jika ada
        if ($lamaran->cv_file) {
            Storage::delete('public/cv/' . $lamaran->cv_file);
        }

        $lamaran->delete();

        return redirect()
            ->back()
            ->with('success', 'Lamaran berhasil dihapus');
    }
}
