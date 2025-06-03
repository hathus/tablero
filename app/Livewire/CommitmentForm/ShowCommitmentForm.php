<?php

namespace App\Livewire\CommitmentForm;

use Livewire\Component;

class ShowCommitmentForm extends Component
{
    public function render()
    {

    }

    public function cancel()
    {
        return redirect()->route('fichas');
    }
}
