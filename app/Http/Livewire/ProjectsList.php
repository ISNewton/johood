<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectsList extends Component
{
    public $projects;

    public function mount()
    {
        $this->projects = Project::where('is_visible',true)->get();
    }
    
    public function render()
    {
        return view('livewire.projects-list');
    }

    public function register(Project $project) 
    {
        session()->put('project_id',$project->id);
        return redirect()->route('form');
    }
}
