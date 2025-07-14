@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Daftar Tugas</h1>
    <a href="{{ route('tasks.add_tugas') }}"
        class="inline-block px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Tambah Tugas
    </a>
    @livewire('task-list')
@endsection
