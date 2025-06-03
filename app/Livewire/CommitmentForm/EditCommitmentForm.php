<?php

namespace App\Livewire\CommitmentForm;

use Livewire\Component;

class EditCommitmentForm extends Component
{
    public function render()
    {

    }

    public function cancel()
    {
        return redirect()->route('fichas');
    }
}
