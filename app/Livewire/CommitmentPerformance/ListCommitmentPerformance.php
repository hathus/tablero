<?php

namespace App\Livewire\CommitmentPerformance;

use Livewire\Component;

class ListCommitmentPerformance extends Component
{
    public function render()
    {
        return view('livewire.commitment-performance.list-commitment-performance');
    }

    public function create()
    {
        return redirect()->route('crear-cumplimiento');
    }

    public function edit()
    {
        return redirect()->route('editar-cumplimiento');
    }

    public function show()
    {
        return redirect()->route('mostrar-cumplimiento');
    }
}
