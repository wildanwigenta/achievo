<div class="space-y-4 mt-6">
    @forelse ($tasks as $task)
        <div class="flex items-start justify-between bg-gray-50 px-4 py-3 border rounded shadow-sm">
            <div class="flex items-start gap-3">
                <input type="checkbox" wire:click="toggleStatus({{ $task->id }})" {{ $task->status ? 'checked' : '' }} class="mt-1">

                <div>
                    <h2 class="text-lg font-semibold {{ $task->status ? 'line-through text-gray-500' : '' }}">
                        {{ $task->title }}
                    </h2>
                    <p class="text-sm text-gray-600">{{ $task->description }}</p>
                    <p class="text-xs text-gray-500"> {{ \Carbon\Carbon::parse($task->due_date)->format('d M Y H:i') }}</p>
                    <p class="text-xs"> {{ $task->category ?? 'Tanpa Kategori' }} |  {{ ucfirst($task->priority) }}</p>
                </div>
            </div>

            <button wire:click="delete({{ $task->id }})" class="text-red-600 hover:text-red-800 text-sm">Hapus</button>

        </div>
    @empty
        <p class="text-gray-600 text-center">Belum ada tugas.</p>
    @endforelse
</div>
