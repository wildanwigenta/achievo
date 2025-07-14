@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Tambah Tugas</h1>
    @livewire('task-form', ['task' => $task ?? null])
@endsection
