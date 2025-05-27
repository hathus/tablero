<?php

namespace App\Livewire\CommitmentForm;

use Livewire\Component;

class CreateCommitmentForm extends Component
{
    public function render()
    {
        return view('livewire.commitment-form.create-commitment-form');
    }

    public function cancel()
    {
        return redirect()->route('fichas');
    }
}
