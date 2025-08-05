@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6"> Edit Tugas</h1>
    @livewire('task-edit', ['id' => $id])
@endsection
@section('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('taskUpdated', () => {
                alert('Tugas berhasil diperbarui!');
            });
        });
    </script>