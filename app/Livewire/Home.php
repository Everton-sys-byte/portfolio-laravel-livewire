<?php

namespace App\Livewire;

use App\Models\EducationExperience;
use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\On;

class Home extends Component
{
    public $projects;
    public $educations;
    public $experiences;

    public function mount(){
        $this->projects = Project::all();
        $this->educations = EducationExperience::where('type', 'education')->get();
        $this->experiences = EducationExperience::where('type', 'work')->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
