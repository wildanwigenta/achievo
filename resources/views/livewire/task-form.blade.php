<div>
    @if (session()->has('success'))
        <div class="bg-green-200 text-green-800 px-4 py-2 rounded mb-3">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="store" class="space-y-3">
        <label for="">Judul Tugas:</label>
        <input type="text" wire:model="title" class="w-full border px-3 py-2 rounded">
        @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        <br>
        <label for="">Deskripsi Tugas:</label>
        <textarea wire:model="description" placeholder="Deskripsi (Opsional)" class="w-full border px-3 py-2 rounded"></textarea>
        @error('description') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        <br>
        <label for="">Tanggal Jatuh Tempo:</label>
        <input type="datetime-local" wire:model="due_date" class="w-full border px-3 py-2 rounded" >
        @error('due_date') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        <br>
        <label for="">Prioritas:</label>
        <select wire:model="priority" class="w-full border px-3 py-2 rounded">
            <option value="">Pilih Prioritas</option>
            <option value="low">Rendah</option>
            <option value="medium">Sedang</option>
            <option value="high">Tinggi</option>
        </select>
        @error('priority') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        <br>
        <label for="">Kategori:</label>
        <input type="text" wire:model="category" placeholder="Kategori (Opsional)" class="w-full border px-3 py-2 rounded">
        @error('category') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Tugas</button>
    </form>
</div>
