<div>
    @foreach ($tasks as $task)
    <div>
        <h4>{{ $task->title }} ({{ $task->priority }})</h4>
        <p>{{ $task->description }}</p>
        <p>Deadline: {{ $task->due_date }}</p>
        <button wire:click="delete({{ $task->id }})">Hapus</button>
    </div>
    @endforeach
</div>
