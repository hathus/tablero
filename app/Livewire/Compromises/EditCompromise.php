<?php

namespace App\Livewire\Compromises;

use Livewire\Component;

class EditCompromise extends Component
{
    public function render()
    {
        return view('livewire.compromises.edit-compromise');
    }

    public function cancel()
    {
        return redirect()->route('compromisos');
    }
}
