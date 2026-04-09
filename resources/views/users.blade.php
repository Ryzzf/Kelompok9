@extends('layouts.app')

@section('title', 'Users')

@section('content')

<h2 class="text-3xl font-bold mb-6 text-gray-800">Data Users</h2>
<div class="flex justify-between items-center mb-4">
    <p class="text-gray-500">Daftar pengguna sistem</p>

    <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl shadow transition">
        + Tambah User
    </button>
</div>
<div class="bg-white p-6 rounded-2xl shadow">

    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="text-gray-500 text-sm border-b">
                <th class="pb-3">Nama</th>
                <th class="pb-3">Email</th>
                <th class="pb-3">Role</th>
                <th class="pb-3 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody class="text-gray-700">

            <tr class="border-b hover:bg-gray-50 transition">
                <td class="py-3 font-medium">Rangga</td>
                <td class="py-3">rangga@email.com</td>
                <td class="py-3">
                    <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs">
                        Admin
                    </span>
                </td>
                <td class="py-3 text-center">
                    <button class="text-blue-500 hover:underline">Edit</button>
                    <button class="text-red-500 hover:underline ml-2">Hapus</button>
                </td>
            </tr>

            <tr class="border-b hover:bg-gray-50 transition">
                <td class="py-3 font-medium">Marhamah</td>
                <td class="py-3">marhamah@email.com</td>
                <td class="py-3">
                    <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs">
                        User
                    </span>
                </td>
                <td class="py-3 text-center">
                    <button class="text-blue-500 hover:underline">Edit</button>
                    <button class="text-red-500 hover:underline ml-2">Hapus</button>
                </td>
            </tr>

            <tr class="hover:bg-gray-50 transition">
                <td class="py-3 font-medium">Ajeng</td>
                <td class="py-3">ajeng@email.com</td>
                <td class="py-3">
                    <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs">
                        User
                    </span>
                </td>
                <td class="py-3 text-center">
                    <button class="text-blue-500 hover:underline">Edit</button>
                    <button class="text-red-500 hover:underline ml-2">Hapus</button>
                </td>
            </tr>

        </tbody>
    </table>

</div>

@endsection