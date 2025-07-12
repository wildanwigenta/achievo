<?php

namespace App\Livewire;
use App\Models\Task;
use Livewire\Component;

class TaskForm extends Component
{
    public $title, $description, $due_date, $priority, $category;

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'due_date' => 'required|date',
            'priority' => 'required',
        ]);

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'priority' => $this->priority,
            'category' => $this->category,
        ]);

        session()->flash('success', 'Tugas berhasil ditambahkan');
        $this->reset();
        $this->emit('taskUpdated');
    }

    public function render()
    {
        return view('livewire.task-form');
    }
}
