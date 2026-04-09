@extends('layouts.app')

@section('title', 'Settings')

@section('content')

<h2 class="text-3xl font-bold mb-6 text-gray-800">Settings</h2>

<div class="bg-white p-8 rounded-2xl shadow max-w-2xl">

    <form class="space-y-6">
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-4">General Settings</h3>

            <div class="mb-4">
                <label class="block mb-1 text-sm text-gray-500">Nama Aplikasi</label>
                <input type="text" placeholder="Penjualan????"
                    class="w-full border border-gray-200 p-3 rounded-xl focus:ring-2 focus:ring-blue-400 outline-none">
            </div>

            <div class="mb-4">
                <label class="block mb-1 text-sm text-gray-500">Nama Admin</label>
                <input type="text" placeholder="Rangga"
                    class="w-full border border-gray-200 p-3 rounded-xl focus:ring-2 focus:ring-blue-400 outline-none">
            </div>

            <div>
                <label class="block mb-1 text-sm text-gray-500">Email Admin</label>
                <input type="email" placeholder="admin@email.com"
                    class="w-full border border-gray-200 p-3 rounded-xl focus:ring-2 focus:ring-blue-400 outline-none">
            </div>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Appearance</h3>

            <div>
                <label class="block mb-1 text-sm text-gray-500">Tema</label>
                <select class="w-full border border-gray-200 p-3 rounded-xl focus:ring-2 focus:ring-blue-400 outline-none">
                    <option>Light</option>
                    <option>Dark</option>
                </select>
            </div>
        </div>

        <div class="pt-4">
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-xl shadow transition">
                Simpan Perubahan
            </button>
        </div>

    </form>

</div>

@endsection