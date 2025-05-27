<form class="md:w-1/2 space-y-5" wire:submit.prevent="" novalidate>
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 justify-stretch mb-4">
                <x-input-label class="uppercase" for="anio_aplicado" :value="__('Año de Aplicación')" />
                <x-text-input id="anio_aplicado" class="block mt-1 w-full" type="text" wire:model="anio_aplicado" wire:model.live="anio_aplicado" :value="old('anio_aplicado')" placeholder="Año de Aplicación" />
            </div>
            <div class="md:flex-col md:w-1/2">
                <x-input-label class="uppercase" for="presupuesto_aplicado" :value="__('Presupuesto Aplicado')" />
                <x-text-input id="presupuesto_aplicado" class="block mt-1 w-full" type="text" wire:model="presupuesto_aplicado" wire:model.live="numero compromiso" :value="old('presupuesto_aplicado')" placeholder="Presupuesto Aplicado" />
            </div>
        </div>
    </div>

    <x-primary-button class="w-full justify-center mt-4 hover:bg-green-500 dark:hover:bg-green-600 print:hidden" onclick="window.print()">
        Imprimir
    </x-primary-button>
    <x-secondary-button class="w-full justify-center mt-4 print:hidden" wire:click='cancel()'>
        Cancelar
    </x-secondary-button>
</form>