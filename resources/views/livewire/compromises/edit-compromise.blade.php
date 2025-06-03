<form class="md:w-1/2 space-y-5 x-cloak" wire:submit="editCompromise" novalidate>
    <span></span>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 alert">
        @if (session()->has('message'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div id="alert" class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold
                                    p-2 my-3 text-center">
                    {{ session('message') }}
                </div>
            </div>
        @endif
    </div>
    <div class="mt-4">
        <x-input-label class="uppercase" for="eje_numero" :value="__('Eje Número')" />
        <x-text-input id="eje_numero" class="block mt-1 w-full" type="number" step="1" min="1" wire:model="eje_numero"
                      wire:model.live="eje_numero" :value="old('eje_numero')" placeholder="Número del Eje" />
        @error('eje_numero')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div class="mt-4">
        <x-input-label class="uppercase" for="eje_nombre" :value="__('Eje Nombre')" />
        <x-text-input id="eje_nombre" class="block mt-1 w-full" type="text" wire:model="eje_nombre"
                      wire:model.live="eje_nombre" :value="old('eje_nombre')" placeholder="Nombre del Eje" />
        @error('eje_nombre')
        <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <x-primary-button class="w-full justify-center mt-4 hover:bg-green-500 dark:hover:bg-green-600">
        Actualizar
    </x-primary-button>
    <x-secondary-href href="{{ route('compromisos') }}" class="w-full justify-center mt-4" wire:navigate>
        Cancelar
    </x-secondary-href>
</form>
