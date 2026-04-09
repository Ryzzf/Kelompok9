@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<h2 class="text-3xl font-bold mb-6 text-gray-800">Dashboard</h2>
<div class="bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800 p-4 rounded-xl mb-6 shadow-sm">
    ⚠️ Ada 3 data belum diproses!
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-gray-500 text-sm">Users</h3>
        <p class="text-2xl font-bold text-blue-600">100</p>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-gray-500 text-sm">Orders</h3>
        <p class="text-2xl font-bold text-green-600">250</p>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-gray-500 text-sm">Revenue</h3>
        <p class="text-2xl font-bold text-purple-600">Rp 10jt</p>
    </div>

    <div class="bg-white p-5 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-gray-500 text-sm">Produk</h3>
        <p class="text-2xl font-bold text-pink-600">50</p>
    </div>

</div>
<div class="flex flex-wrap gap-3 mt-6">
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl shadow transition">
        + Tambah User
    </button>

    <button class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-xl shadow transition">
        Export Data
    </button>
</div>
<div class="bg-white p-6 rounded-2xl shadow mt-8">
    <h3 class="font-semibold text-gray-700 mb-4">Statistik Penjualan</h3>
    <canvas id="myChart"></canvas>
</div>
<div class="bg-white p-6 rounded-2xl shadow mt-8">
    <h3 class="font-semibold text-gray-700 mb-3">Aktivitas Terbaru</h3>
    <ul class="text-sm text-gray-600 space-y-2">
        <li class="hover:text-blue-500 transition">✔ User baru ditambahkan</li>
        <li class="hover:text-blue-500 transition">✔ Data diperbarui</li>
        <li class="hover:text-blue-500 transition">✔ Login berhasil</li>
    </ul>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr'],
        datasets: [{
            label: 'Penjualan',
            data: [10, 20, 30, 25],
            borderRadius: 8
        }]
    },
    options: {
        plugins: {
            legend: {
                labels: {
                    color: '#374151'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#6B7280'
                }
            },
            y: {
                ticks: {
                    color: '#6B7280'
                }
            }
        }
    }
});
</script>

@endsection