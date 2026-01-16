@foreach ($lamarans as $lamaran)
    <tr>
        <td style="font-weight: bold;">{{ $lamaran->lowongan->posisi }}</td>
        <td>{{ $lamaran->created_at->format('d M Y') }}</td>
        <td>
            <a href="{{ asset('storage/cv/' . $lamaran->cv_file) }}" target="_blank" style="color: #e67e22; text-decoration: none; font-size: 0.9rem;">
                📄 Lihat CV
            </a>
        </td>
    </tr>
@endforeach