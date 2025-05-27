<?php

namespace App\Livewire\CommitmentPerformance;

use Livewire\Component;

class CreateCommitmentPerformance extends Component
{
    public function render()
    {
        return view('livewire.commitment-performance.create-commitment-performance');
    }

    public function cancel()
    {
        return redirect()->route('cumplimiento');
    }
}
