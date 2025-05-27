<form class="md:w-1/2 space-y-5" wire:submit.prevent="" novalidate>
    <div class="mt-4">
        <x-input-label class="uppercase" for="eje_numero" :value="__('Eje Número')" />
        <x-text-input id="eje_numero" class="block mt-1 w-full" type="text" wire:model="eje_numero" wire:model.live="eje_numero"
            :value="old('eje_numero')" placeholder="Número del Eje" />
    </div>
    <div class="mt-4">
        <x-input-label class="uppercase" for="eje_nombre" :value="__('Eje Nombre')" />
        <x-text-input id="eje_nombre" class="block mt-1 w-full" type="text" wire:model="eje_nombre" wire:model.live="eje_nombre"
            :value="old('eje_nombre')" placeholder="Nombre del Eje" />
    </div>
    <x-primary-button class="w-full justify-center mt-4 hover:bg-green-500 dark:hover:bg-green-600 print:hidden" onclick="window.print()">
        Imprimir
    </x-primary-button>
    <x-secondary-button class="w-full justify-center mt-4 print:hidden" wire:click='cancel()'>
        Cancelar
    </x-secondary-button>
</form>
