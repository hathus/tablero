<?php

namespace App\Livewire\Compromises;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Compromise;
use Livewire\Attributes\On;

class ShowCompromise extends Component
{
    public function render()
    {
        $compromisos = DB::table('compromisos')->get();

        return view('livewire.compromises.show-compromise', [
            'compromisos' => $compromisos,
        ]);
    }

    public function cancel()
    {
        return redirect()->route('compromisos');
    }

    #[On('deleteCompromiseRecord')]
    public function deleteCompromiseRecord($id)
    {
        $compromiseRecord = Compromise::find($id);
        $compromiseRecord->delete();
    }
}
