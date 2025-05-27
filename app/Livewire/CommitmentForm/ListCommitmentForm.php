<?php

namespace App\Livewire\CommitmentForm;

use Livewire\Component;

class ListCommitmentForm extends Component
{
    public function render()
    {
        return view('livewire.commitment-form.list-commitment-form');
    }

    public function create()
    {
        return redirect()->route('crear-ficha');
    }

    public function edit()
    {
        return redirect()->route('editar-ficha');
    }

    public function show()
    {
        return redirect()->route('mostrar-ficha');
    }
}
