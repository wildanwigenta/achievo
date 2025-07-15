<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Task;

class TaskEdit extends Component
{
    public $taskId;
    public $title, $description, $due_date, $priority, $category;

    public function mount($id)
    {
        $task = Task::findOrFail($id);
        $this->taskId = $task->id;
        $this->title = $task->title;
        $this->description = $task->description;
        $this->due_date = $task->due_date;
        $this->priority = $task->priority;
        $this->category = $task->category;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'due_date' => 'required|date',
            'priority' => 'required|in:low,medium,high',
        ]);

        $task = Task::findOrFail($this->taskId);
        $task->update([
            'title' => $this->title,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'priority' => $this->priority,
            'category' => $this->category,
        ]);

        session()->flash('success', 'Tugas berhasil diperbarui.');
        return redirect()->route('tasks.index');
    }

    public function render()
    {
        return view('livewire.task-edit');
        
    }
}

