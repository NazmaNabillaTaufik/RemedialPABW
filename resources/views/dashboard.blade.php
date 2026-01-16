@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Dashboard</h1>

<p>Nama: {{ auth()->user()->name }}</p>
<p>Email: {{ auth()->user()->email }}</p>
<p>Role: {{ auth()->user()->role }}</p>

<hr class="my-4">

<a href="{{ route('lowongan.index') }}"
   class="inline-block bg-blue-600 text-white px-4 py-2 rounded">
   Lihat Lowongan
</a>
@endsection
