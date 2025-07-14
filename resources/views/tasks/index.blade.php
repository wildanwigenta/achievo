@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6"> Daftar Tugas</h1>
    <a href="{{ route('tasks.add_tugas') }}"
        class="mb-4 inline-block px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700 transition">
        + Tambah Tugas
    </a>
    @livewire('task-list')
@endsection
