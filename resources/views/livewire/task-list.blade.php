<div class="space-y-6 mt-8">
    @forelse ($tasks as $task)
        <div class="group relative bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
            <!-- Priority accent bar -->
            <div class="absolute top-0 left-0 bottom-0 w-1.5 
                {{ $task->priority === 'high' ? 'bg-red-500' : ($task->priority === 'medium' ? 'bg-amber-500' : 'bg-emerald-500') }}">
            </div>

            <div class="flex items-start p-5 sm:p-6 gap-4 ms-1.5">
                <!-- Status Checkbox -->
                <div class="mt-1">
                    <label class="relative flex items-center cursor-pointer">
                        <input type="checkbox" wire:click="toggleStatus({{ $task->id }})" {{ $task->status ? 'checked' : '' }}
                            class="peer sr-only">
                        <div class="w-6 h-6 border-2 border-zinc-300 dark:border-zinc-700 rounded-lg bg-white dark:bg-zinc-800 peer-checked:bg-primary-600 peer-checked:border-primary-600 transition-all flex items-center justify-center">
                            <svg class="w-4 h-4 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </label>
                </div>

                <!-- Task Details -->
                <div class="flex-grow min-w-0">
                    <div class="flex flex-wrap items-center gap-2 mb-1">
                        <h2 class="text-lg font-bold tracking-tight truncate transition-all {{ $task->status ? 'line-through text-zinc-400 dark:text-zinc-600' : 'text-zinc-900 dark:text-zinc-100' }}">
                            {{ $task->title }}
                        </h2>
                        
                        <!-- Badges -->
                        <div class="flex items-center gap-2">
                            <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700">
                                {{ $task->category ?? 'General' }}
                            </span>
                        </div>
                    </div>

                    <p class="text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed line-clamp-2 mb-3">
                        {{ $task->description }}
                    </p>

                    <div class="flex flex-wrap items-center gap-y-2 gap-x-4">
                        <!-- Deadline -->
                        <div class="flex items-center gap-1.5 text-xs font-medium {{ \Carbon\Carbon::parse($task->due_date)->isPast() && !$task->status ? 'text-red-600 dark:text-red-400' : 'text-zinc-500 dark:text-zinc-500' }}">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ \Carbon\Carbon::parse($task->due_date)->format('d M, H:i') }}
                        </div>

                        <!-- Priority Label -->
                        <div class="flex items-center gap-1 text-[11px] font-bold uppercase tracking-widest
                            {{ $task->priority === 'high' ? 'text-red-600' : ($task->priority === 'medium' ? 'text-amber-600' : 'text-emerald-600') }}">
                            <div class="w-1.5 h-1.5 rounded-full bg-current"></div>
                            {{ $task->priority }}
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                    <a href="{{ route('tasks.edit_tugas', $task->id) }}"
                        class="p-2 text-zinc-400 hover:text-primary-600 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-xl transition-all" 
                        title="Edit Task">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                    <button wire:click="delete({{ $task->id }})"
                        onclick="confirm('Hapus tugas ini?') || event.stopImmediatePropagation()"
                        class="p-2 text-zinc-400 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-xl transition-all"
                        title="Delete Task">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-4v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @empty
        <div class="flex flex-col items-center justify-center py-20 px-4 text-center bg-zinc-50 dark:bg-zinc-900/50 rounded-3xl border-2 border-dashed border-zinc-200 dark:border-zinc-800">
            <div class="bg-zinc-200/50 dark:bg-zinc-800/50 p-6 rounded-full mb-6 text-zinc-400">
                <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-zinc-900 dark:text-zinc-100 mb-2">Semua selesai!</h3>
            <p class="text-zinc-500 max-w-xs">Tidak ada tugas tertunda. Waktunya bersantai atau mulai sesuatu yang baru.</p>
            <a href="{{ route('tasks.add_tugas') }}" class="mt-6 inline-flex items-center font-semibold text-primary-600 hover:text-primary-700 transition">
                Tambah Tugas Pertama Anda
                <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    @endforelse
</div>
