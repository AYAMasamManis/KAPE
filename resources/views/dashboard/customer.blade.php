{{-- resources/views/dashboard/customer.blade.php --}}
<x-app-layout>
    <h2>Dashboard Pelanggan</h2>
    <p>Halo, {{ Auth::user()->name }} 👋</p>
    <p>Terima kasih sudah menggunakan Waiteu!</p>

    <a href="/produk" class="cta-button">Lihat Produk</a>
</x-app-layout>
