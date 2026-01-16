@extends('layouts.app')

@section('content')
<h3>Daftar Lowongan</h3>

<table class="table">
@foreach($lowongans as $l)
<tr>
    <td>
        <b>{{ $l->posisi }}</b><br>
        {{ $l->perusahaan }} – {{ $l->lokasi_kerja }}
    </td>
    <td>
        <form action="{{ route('lamaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="lowongan_id" value="{{ $l->id }}">
            <textarea name="deskripsi_lamaran" required placeholder="Alasan melamar"></textarea>
            <input type="file" name="cv_file" required>
            <button class="btn btn-success">Lamar</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
