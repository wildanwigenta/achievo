@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6"> Edit Tugas</h1>
    @livewire('task-edit', ['id' => $id])
    @endsection