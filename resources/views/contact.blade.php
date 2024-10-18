@extends('layouts.app')

@section('title', 'Halaman Kontak')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Data Kontak</h1>
    <table class="w-full bg-white shadow-md rounded">
        <thead>
            <tr class="bg-gray-500">
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $contacts = [
                    ['nama' => 'Agil', 'email' => 'Agil@gmail.com', 'jabatan' => 'Mahasiswa'],
                    ['nama' => 'Agil', 'email' => 'Agil@gmail.com', 'jabatan' => 'Dosen'],
                    ['nama' => 'Agil', 'email' => 'Agil@gmail.com', 'jabatan' => 'Mahasiswa'],
                    ['nama' => 'Agil', 'email' => 'Agil@gmail.com', 'jabatan' => 'Mahasiswa'],
                ];
            @endphp

            @foreach ($contacts as $contact)
                <tr class="border-b">
                    <td class="p-3">{{ $contact['nama'] }}</td>
                    <td class="p-3">{{ $contact['email'] }}</td>
                    <td class="p-3">{{ $contact['jabatan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
