<div class="space-y-4 mt-6">
    @forelse ($tasks as $task)
        <div class="flex items-start justify-between bg-white px-5 py-4 border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
            <div class="flex items-start gap-3">
                <input type="checkbox" wire:click="toggleStatus({{ $task->id }})" {{ $task->status ? 'checked' : '' }} class="mt-1">
                <div>
                    <h2 class="text-lg font-semibold {{ $task->status ? 'line-through text-gray-400' : 'text-gray-800' }}">
                        {{ $task->title }}
                    </h2>
                    <p class="text-sm text-gray-600">{{ $task->description }}</p>
                    <p class="text-xs text-gray-500 mt-1">
                         {{ \Carbon\Carbon::parse($task->due_date)->format('d M Y H:i') }}
                    </p>
                    <div class="mt-1 text-xs">
                        <span class="bg-gray-100 px-2 py-0.5 rounded">{{ $task->category ?? 'Tanpa Kategori' }}</span>
                        <span class="ml-2 px-2 py-0.5 rounded 
                            {{ $task->priority === 'high' ? 'bg-red-100 text-red-600' : ($task->priority === 'medium' ? 'bg-yellow-100 text-yellow-700' : 'bg-green-100 text-green-600') }}">
                            {{ ucfirst($task->priority) }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="ml-5 flex flex-col items-end gap-2">
                <a href="{{ route('tasks.edit-tugas', $task->id) }}" class="text-blue-500 hover:text-blue-700 text-sm">Edit</a>
                <button wire:click="delete({{ $task->id }})" class="text-red-500 hover:text-red-700 text-sm">Hapus</button>
            </div>
        </div>
    @empty
        <p class="text-gray-500 text-center">Belum ada tugas.</p>
    @endforelse
</div>
