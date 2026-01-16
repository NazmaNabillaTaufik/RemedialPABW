@extends('layouts.main')

@section('content')
<div style="max-width: 600px; margin: 40px auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
    <h2 style="border: none; padding: 0; margin-bottom: 10px;">Lamar Pekerjaan</h2>
    <p style="color: #666; margin-bottom: 25px;">Anda melamar sebagai: <strong style="color: #3498db;">{{ $lowongan->posisi }}</strong> di {{ $lowongan->perusahaan }}</p>

    <form action="{{ route('lamaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="lowongan_id" value="{{ $lowongan->id }}">

        <div style="margin-bottom: 20px;">
            <label style="display: block; font-weight: bold; margin-bottom: 8px;">Deskripsi Diri / Cover Letter</label>
            <textarea name="deskripsi_lamaran" rows="5" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-family: inherit;" placeholder="Jelaskan mengapa Anda cocok untuk posisi ini..." required></textarea>
        </div>

        <div style="margin-bottom: 25px;">
            <label style="display: block; font-weight: bold; margin-bottom: 8px;">Unggah CV (PDF/DOC - Max 2MB)</label>
            <input type="file" name="cv_file" style="width: 100%; padding: 10px; border: 1px solid #eee; background: #f9f9f9; border-radius: 8px;" required>
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" style="flex: 1; background: #3498db; color: white; border: none; padding: 12px; border-radius: 8px; font-weight: bold; cursor: pointer;">
                Kirim Lamaran
            </button>
            <a href="/lowongan" style="flex: 1; text-align: center; background: #eee; color: #333; text-decoration: none; padding: 12px; border-radius: 8px; font-weight: bold;">
                Batal
            </a>
        </div>
    </form>
</div>
@endsection