<?php

namespace App\Livewire;
use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;

    protected $listeners = ['taskUpdated' => 'loadTasks'];

    public function mount()
    {
        $this->loadTasks();
    }

    public function loadTasks()
    {
        $this->tasks = Task::orderBy('order')->orderBy('due_date')->get();
    }

    public function delete($id)
    {
        Task::findOrFail($id)->delete();
        $this->loadTasks();
    }


    public function toggleStatus($id)
    {
        $task = Task::findOrFail($id);
        $task->status = !$task->status;
        $task->save();
        $this->loadTasks();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}