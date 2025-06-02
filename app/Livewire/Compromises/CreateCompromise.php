<?php

namespace App\Livewire\Compromises;

use Livewire\Component;
use App\Models\Compromise;
use Livewire\Attributes\Validate;


class CreateCompromise extends Component
{
    #[Validate('required', message: 'El campo eje número es requerido')]
    public $eje_numero;

    #[Validate('required', message: 'El campo eje nombre es requerido')]
    #[Validate('min:3', message: 'El campo eje nombre requiere de 3 letras minimo')]
    public $eje_nombre;

    public function render()
    {
        return view('livewire.compromises.create-compromise');
    }

    public function cancel()
    {
        return redirect()->route('compromisos');
    }

    public function save()
    {
        $compromise = $this->validate();

        Compromise::create($compromise);

        $this->reset();
    }
}
