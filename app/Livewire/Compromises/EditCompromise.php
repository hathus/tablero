<?php

namespace App\Livewire\Compromises;

use App\Models\Compromise;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditCompromise extends Component
{
    #[Locked]
    public $compromise_id;

    #[Validate('required', message: 'El campo eje número es requerido')]
    public $eje_numero;

    #[Validate('required', message: 'El campo eje nombre es requerido')]
    #[Validate('min:3', message: 'El campo eje nombre requiere de 3 letras minimo')]
    public $eje_nombre;

    public function mount(Compromise $compromise)
    {
        $this->compromise_id = $compromise->id;
        $this->eje_numero = $compromise->eje_numero;
        $this->eje_nombre = $compromise->eje_nombre;
    }

    public function render()
    {
        return view('livewire.compromises.edit-compromise');
    }

    public function cancel()
    {
        return redirect()->route('compromisos');
    }

    public function editCompromise()
    {
        $validatedCompromise = $this->validate();

        $compromiseRecord = Compromise::find($this->compromise_id);
        $compromiseRecord->eje_numero = $validatedCompromise['eje_numero'];
        $compromiseRecord->eje_nombre = $validatedCompromise['eje_nombre'];
        $compromiseRecord->save();

        session()->flash('message', 'El eje se actualizó correctamente!');

        return redirect()->route('compromisos');
    }
}
