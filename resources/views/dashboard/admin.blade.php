echo ^@extends('layouts.app')^
@section('content')
    <h2>Dashboard Admin</h2>
    <p>Halo, ^{{ Auth::user()->name }}^} 👋</p>
    <p>Selamat datang di panel Admin. Di sini kamu bisa mengelola produk dan pesanan.</p>
    <a href="/produk" class="cta-button">Kelola Produk</a>
@endsection > resources\views\dashboard\admin.blade.php
