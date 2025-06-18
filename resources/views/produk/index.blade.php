{{-- resources/views/produk/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <h2>Daftar Produk Waiteu</h2>

    @if ($produks->isEmpty())
        <p>Tidak ada produk tersedia saat ini.</p>
    @else
        <div class="produk-list">
            @foreach ($produks as $produk)
                <div class="card">
                    <h3>{{ $produk->nama }}</h3>
                    <p>{{ $produk->deskripsi }}</p>
                    <p><strong>Harga:</strong> Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                </div>
            @endforeach
        </div>
    @endif
@endsection
