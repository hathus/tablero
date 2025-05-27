<?php

namespace App\Livewire\CommitmentPlanning;

use Livewire\Component;

class CreateCommitmentPlanning extends Component
{
    public function render()
    {
        return view('livewire.commitment-planning.create-commitment-planning');
    }

    public function cancel()
    {
        return redirect()->route('planes');
    }
}
