<?php

namespace App\Livewire\CommitmentForm;

use Livewire\Component;

class ListCommitmentForm extends Component
{
    public function render()
    {

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
