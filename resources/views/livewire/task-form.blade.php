<div class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-3xl shadow-xl overflow-hidden">
    <div class="px-6 py-8 sm:px-10">
        @if (session()->has('success'))
            <div class="mb-8 flex items-center p-4 text-emerald-800 bg-emerald-50 dark:bg-emerald-900/20 dark:text-emerald-400 border border-emerald-100 dark:border-emerald-800 rounded-2xl">
                <svg class="w-5 h-5 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-sm font-semibold">{{ session('success') }}</p>
            </div>
        @endif

        <form wire:submit.prevent="store" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Judul -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-zinc-700 dark:text-zinc-300 mb-2 ms-1">Judul Tugas</label>
                    <input type="text" wire:model="title" placeholder="Apa yang ingin Anda kerjakan?"
                        class="w-full bg-zinc-50 dark:bg-zinc-800/50 border-zinc-200 dark:border-zinc-700 rounded-2xl px-4 py-3 text-zinc-900 dark:text-zinc-100 placeholder-zinc-400 focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all outline-none">
                    @error('title')
                        <p class="text-red-600 text-xs mt-2 ms-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-zinc-700 dark:text-zinc-300 mb-2 ms-1">Deskripsi Tugas</label>
                    <textarea wire:model="description" rows="4" placeholder="Detail opsional untuk tugas ini..."
                        class="w-full bg-zinc-50 dark:bg-zinc-800/50 border-zinc-200 dark:border-zinc-700 rounded-2xl px-4 py-3 text-zinc-900 dark:text-zinc-100 placeholder-zinc-400 focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all outline-none resize-none"></textarea>
                    @error('description')
                        <p class="text-red-600 text-xs mt-2 ms-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Jatuh Tempo -->
                <div>
                    <label class="block text-sm font-bold text-zinc-700 dark:text-zinc-300 mb-2 ms-1">Tanggal & Waktu</label>
                    <div class="relative">
                        <input type="datetime-local" wire:model="due_date"
                            class="w-full bg-zinc-50 dark:bg-zinc-800/50 border-zinc-200 dark:border-zinc-700 rounded-2xl px-4 py-3 text-zinc-900 dark:text-zinc-100 focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all outline-none">
                    </div>
                    @error('due_date')
                        <p class="text-red-600 text-xs mt-2 ms-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Prioritas -->
                <div>
                    <label class="block text-sm font-bold text-zinc-700 dark:text-zinc-300 mb-2 ms-1">Prioritas</label>
                    <select wire:model="priority"
                        class="w-full bg-zinc-50 dark:bg-zinc-800/50 border-zinc-200 dark:border-zinc-700 rounded-2xl px-4 py-3 text-zinc-900 dark:text-zinc-100 focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all outline-none appearance-none">
                        <option value="">Pilih Tingkat Prioritas</option>
                        <option value="low">Low (Rendah)</option>
                        <option value="medium">Medium (Sedang)</option>
                        <option value="high">High (Tinggi)</option>
                    </select>
                    @error('priority')
                        <p class="text-red-600 text-xs mt-2 ms-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kategori -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-bold text-zinc-700 dark:text-zinc-300 mb-2 ms-1">Kategori</label>
                    <input type="text" wire:model="category" placeholder="E.g. Kerja, Rumah, Belajar..."
                        class="w-full bg-zinc-50 dark:bg-zinc-800/50 border-zinc-200 dark:border-zinc-700 rounded-2xl px-4 py-3 text-zinc-900 dark:text-zinc-100 placeholder-zinc-400 focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all outline-none">
                    @error('category')
                        <p class="text-red-600 text-xs mt-2 ms-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-zinc-100 dark:border-zinc-800">
                <a href="{{ route('tasks.index') }}"
                    class="flex items-center text-sm font-bold text-zinc-500 hover:text-zinc-800 dark:hover:text-zinc-200 transition-colors group">
                    <svg class="w-4 h-4 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Daftar
                </a>
                
                <button type="submit" 
                    class="w-full sm:w-auto inline-flex items-center justify-center px-10 py-4 border border-transparent text-base font-bold rounded-2xl text-white bg-primary-600 hover:bg-primary-700 hover:shadow-xl hover:shadow-primary-500/30 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all group">
                    <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                    </svg>
                    Simpan Tugas
                </button>
            </div>
        </form>
    </div>
</div>
