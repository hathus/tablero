<?php

namespace App\Livewire\Compromises;

use Livewire\Component;

class CreateCompromise extends Component
{
    public function render()
    {
        return view('livewire.compromises.create-compromise');
    }

    public function cancel()
    {
        return redirect()->route('compromisos');
    }
}
