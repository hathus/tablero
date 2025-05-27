<?php

namespace App\Livewire\CommitmentPlanning;

use Livewire\Component;

class ShowCommitmentPlanning extends Component
{
    public function render()
    {
        return view('livewire.commitment-planning.show-commitment-planning');
    }

    public function cancel()
    {
        return redirect()->route('planes');
    }
}
