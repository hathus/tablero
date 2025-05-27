<?php

namespace App\Livewire\Compromises;

use Livewire\Component;

class ListCompromises extends Component
{
    public function render()
    {
        return view('livewire.compromises.list-compromises');
    }

    public function create()
    {
        return redirect()->route('crear-compromiso');
    }

    public function edit()
    {
        return redirect()->route('editar-compromiso');
    }

    public function show()
    {
        return redirect()->route('mostrar-compromiso');
    }
}
