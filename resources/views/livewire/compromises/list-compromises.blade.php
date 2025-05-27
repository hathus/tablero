<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border p-10">
            <div class="flex flex-row">
                <div class="basis-1/3 px-2">
                    <x-primary-button class="w-full justify-center hover:bg-green-500 dark:hover:bg-green-600" wire:click='create()'>
                        Crear
                    </x-primary-button>
                </div>
                <div class="basis-1/3 px-2">
                    <x-primary-button class="w-full justify-center hover:bg-green-500 dark:hover:bg-green-600" wire:click='edit()'>
                        editar
                    </x-primary-button>
                </div>
                <div class="basis-1/3 px-2">
                    <x-primary-button class="w-full justify-center hover:bg-green-500 dark:hover:bg-green-600" wire:click='show()'>
                        mostrar
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>
</div>
