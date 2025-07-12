<?php

namespace App\Livewire;
use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks;

    protected $listeners = ['taskUpdated' => 'mount'];

    public function mount()
    {
        $this->tasks = Task::orderBy('order')->get();
    }

    public function delete($id)
    {
        Task::find($id)->delete();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
