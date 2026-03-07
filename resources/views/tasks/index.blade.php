@extends('layouts.app')

@section('content')
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 mb-10">
        <div>
            <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 dark:text-zinc-100">
                Daftar Tugas
            </h1>
            <p class="mt-2 text-zinc-500 dark:text-zinc-400 font-medium">
                Kelola produktivitas harian Anda dengan mudah.
            </p>
        </div>
        
        <a href="{{ route('tasks.add_tugas') }}"
            class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-2xl text-white bg-primary-600 hover:bg-primary-700 hover:shadow-lg hover:shadow-primary-500/30 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all group">
            <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
            </svg>
            Tambah Tugas
        </a>
    </div>

    <div class="relative">
        @livewire('task-list')
    </div>
@endsection
