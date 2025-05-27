<?php

namespace App\Livewire\CommitmentForm;

use Livewire\Component;

class ShowCommitmentForm extends Component
{
    public function render()
    {
        return view('livewire.commitment-form.show-commitment-form');
    }

    public function cancel()
    {
        return redirect()->route('fichas');
    }
}
