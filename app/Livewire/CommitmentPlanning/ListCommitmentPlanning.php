<?php

namespace App\Livewire\CommitmentPlanning;

use Livewire\Component;

class ListCommitmentPlanning extends Component
{
    public function render()
    {
        return view('livewire.commitment-planning.list-commitment-planning');
    }

    public function create()
    {
        return redirect()->route('crear-plan');
    }

    public function edit()
    {
        return redirect()->route('editar-plan');
    }

    public function show()
    {
        return redirect()->route('mostrar-plan');
    }
}
