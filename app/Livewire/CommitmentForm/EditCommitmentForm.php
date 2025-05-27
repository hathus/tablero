<?php

namespace App\Livewire\CommitmentForm;

use Livewire\Component;

class EditCommitmentForm extends Component
{
    public function render()
    {
        return view('livewire.commitment-form.edit-commitment-form');
    }

    public function cancel()
    {
        return redirect()->route('fichas');
    }
}
