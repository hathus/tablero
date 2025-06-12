<div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-[#7baa3f]"
            wire:poll.5000ms>
            @forelse ($compromisos as $compromiso)
            <div
                class="p-6 text-gray-900 dark:text-slate-200 md:flex md:justify-around md:items-center border border-[#7baa3f]">
                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <p class="py-2 px-4 w-1/5 flex justify-around items-center uppercase text-sm font-bold text-center">
                        eje {{
                        $compromiso->eje_numero }}</p>
                    <p class="py-2 px-4 w-1/5 flex justify-around items-center uppercase text-sm font-bold text-center">
                        {{
                        $compromiso->eje_nombre }}</p>
                    <a href="{{route('fichas')}}"
                        class="py-2 px-4 rounded border border-amber-700 dark:text-slate-200 hover:bg-amber-700  text-xs font-bold uppercase flex items-center justify-center hover:text-white w-1/4 text-center">
                        Fichas de Compromisos
                    </a>
                    <a href=""
                        class="py-2 px-4 rounded border border-amber-700 dark:text-slate-200 hover:bg-amber-700  text-xs font-bold uppercase flex items-center justify-center hover:text-white w-1/4 text-center">
                        Fichas de Planeación de Compromisos
                    </a>
                    <a href=""
                        class="py-2 px-4 rounded border border-amber-700 dark:text-slate-200 hover:bg-amber-700  text-xs font-bold uppercase flex items-center justify-center hover:text-white w-1/4 text-center">
                        Cumplimiento de Compromisos
                    </a>

                    <a href="{{ route('editar-compromiso', $compromiso->id) }}"
                        class="border border-blue-700 py-2 px-4 rounded dark:text-slate-100 hover:bg-blue-700 text-xs font-bold uppercase text-center flex items-center justify-center hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mx-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        Editar
                    </a>
                    <button
                        class="border border-red-700 py-2 px-4 rounded dark:text-slate-100 hover:bg-red-700 text-xs font-bold uppercase text-center flex items-center justify-center hover:text-white"
                        wire:click="$dispatch('deleteAlertCompromiseRecord', {{ $compromiso->id }})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 mx-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                        Eliminar
                    </button>
                </div>
            </div>
            @empty
            <span class="text-white">No hay registros</span>
            @endforelse
        </div>
        </divclass=>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Livewire.on('deleteAlertCompromiseRecord', compromisoId => {
                Swal.fire({
                    title: "¿Esta seguro de eliminar este compromiso?",
                    text: "Esta acción no podrá revertirse!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Sí, eliminarlo!",
                    cancelButtonText: "Cancelar",
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('deleteCompromiseRecord', {
                            id: compromisoId
                        });
                        Swal.fire({
                            title: "Compromiso Eliminado!",
                            text: "El compromiso ha sido eliminado.",
                            icon: "success"
                        });
                    }
                });
            });
    </script>
    @endpush
