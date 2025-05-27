<?php

namespace App\Livewire\CommitmentPlanning;

use Livewire\Component;

class EditCommitmentPlanning extends Component
{
    public function render()
    {
        return view('livewire.commitment-planning.edit-commitment-planning');
    }

    public function cancel()
    {
        return redirect()->route('planes');
    }
}
