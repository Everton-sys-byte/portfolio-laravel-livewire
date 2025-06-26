<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\On;

class CardInformation extends Component
{
    public $cardData;

    #[On('selected-project')]
    public function showProject($projectId)
    {
        $foundedCard = Project::find($projectId);
        $this->cardData = $foundedCard; 
        $this->dispatch('disable-scroll');
    }

    #[On('close-card-information')]
    public function closeCard(){
        $this->cardData = null;
        $this->dispatch('enable-scroll');
    }

    public function render()
    {
        return view('livewire.card-information');
    }
}
