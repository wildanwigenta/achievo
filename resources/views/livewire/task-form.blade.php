<div>
    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="store" class="space-y-4">
        <div>
            <label class="font-medium">Judul Tugas</label>
            <input type="text" wire:model="title" class="w-full border border-gray-300 px-3 py-2 rounded focus:ring-2 focus:ring-blue-400">
            @error('title') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="font-medium">Deskripsi Tugas</label>
            <textarea wire:model="description" rows="3" class="w-full border border-gray-300 px-3 py-2 rounded focus:ring-2 focus:ring-blue-400" placeholder="Deskripsi (Opsional)"></textarea>
            @error('description') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="font-medium">Tanggal Jatuh Tempo</label>
            <input type="datetime-local" wire:model="due_date" class="w-full border border-gray-300 px-3 py-2 rounded focus:ring-2 focus:ring-blue-400">
            @error('due_date') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="font-medium">Prioritas</label>
            <select wire:model="priority" class="w-full border border-gray-300 px-3 py-2 rounded focus:ring-2 focus:ring-blue-400">
                <option value="">Pilih Prioritas</option>
                <option value="low">Rendah</option>
                <option value="medium">Sedang</option>
                <option value="high">Tinggi</option>
            </select>
            @error('priority') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="font-medium">Kategori</label>
            <input type="text" wire:model="category" class="w-full border border-gray-300 px-3 py-2 rounded focus:ring-2 focus:ring-blue-400" placeholder="Kategori (Opsional)">
            @error('category') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex justify-between mt-6">
            <a href="{{ route('tasks.index') }}"
                class="text-gray-700 border border-gray-300 px-4 py-2 rounded hover:bg-gray-200 transition">
                ← Daftar Tugas
            </a>
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Tambah +
            </button>
        </div>
    </form>
</div>
