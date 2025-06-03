<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mostrar Ficha de Compromiso') }}
        </h2>
    </x-slot>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="md:flex md:justify-center p-5">
                        <form class="md:w-1/2 space-y-5 print:space-y-1" wire:submit.prevent="" novalidate>
                            <div class="mt-4">
                                <div class="md:flex md:flex-row md:justify-between md:space-x-3">
                                    <div class="md:flex-col md:w-1/2 justify-stretch mb-4">
                                        <x-input-label class="uppercase" for="oid_numero" :value="__('OID Número')" />
                                        <x-text-input id="oid_numero" class="block mt-1 w-full" type="text" wire:model="oid_numero" wire:model.live="oid_numero" :value="old('oid_numero')" placeholder="OID Número" />
                                    </div>
                                    <div class="md:flex-col md:w-1/2">
                                        <x-input-label class="uppercase" for="numero_compromiso" :value="__('Número de Compromiso')" />
                                        <x-text-input id="numero_compromiso" class="block mt-1 w-full" type="text" wire:model="numero_compromiso" wire:model.live="numero compromiso" :value="old('numero_compromiso')" placeholder="Número de Compromiso" />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <x-input-label class="uppercase" for="nombre_compromiso" :value="__('Nombre del Compromiso')" />
                                <x-text-input id="nombre_compromiso" class="block mt-1 w-full" type="text" wire:model="nombre_compromiso" wire:model.live="nombre_compromiso" :value="old('nombre_compromiso')" placeholder="Nombre del Compromiso" />

                            </div>

                            <div class="mt-4">
                                <x-input-label class="uppercase" for="nombre_dependencia" :value="__('Nombre de la Dependencia')" />
                                <x-text-input id="nombre_dependencia" class="block mt-1 w-full" type="text" wire:model="nombre_dependencia" wire:model.live="nombre_dependencia" :value="old('nombre_dependencia')" placeholder="Nombre de la Dependencia" />

                            </div>

                            <div class="mt-4">
                                <x-input-label class="uppercase" for="siglas_dependencia" :value="__('Siglas de la Dependencia')" />
                                <x-text-input id="siglas_dependencia" class="block mt-1 w-full" type="text" wire:model="siglas_dependencia" wire:model.live="siglas_dependencia" :value="old('siglas_dependencia')" placeholder="Siglas de la Dependencia" />

                            </div>

                            <div class="mt-4">
                                <x-input-label class="uppercase" for="inter_dependencia" :value="__('Otras Dependencias')" />
                                <x-text-input id="inter_dependencia" class="block mt-1 w-full" type="text" wire:model="inter_dependencia" wire:model.live="inter_dependencia" :value="old('inter_dependencia')" placeholder="Otras Dependencias" />

                            </div>

                            <div class="mt-4">
                                <x-input-label class="uppercase" for="presupuesto_total" :value="__('Presupuesto Total')" />
                                <x-text-input id="presupuesto_total" class="block mt-1 w-full" type="text" wire:model="presupuesto_total" wire:model.live="presupuesto_total" :value="old('presupuesto_total')" placeholder="Presupuesto Total" />

                            </div>

                            <div class="mt-4">
                                <x-input-label class="uppercase" for="presupuesto_adicional" :value="__('Presupuesto Adicional')" />
                                <x-text-input id="presupuesto_adicional" class="block mt-1 w-full" type="text" wire:model="presupuesto_adicional" wire:model.live="presupuesto_adicional" :value="old('presupuesto_adicional')" placeholder="Presupuesto Adicional" />

                            </div>

                            <div class="mt-4">
                                <x-input-label class="uppercase" for="status_compromiso" :value="__('Estado del Compromiso')" />
                                <x-text-input id="status_compromiso" class="block mt-1 w-full" type="text" wire:model="status_compromiso" wire:model.live="status_compromiso" :value="old('status_compromiso')" placeholder="Estado del Compromiso" />

                            </div>

                            <x-primary-button class="w-full justify-center mt-4 hover:bg-green-500 dark:hover:bg-green-600 print:hidden" onclick="window.print()">
                                Imprimir
                            </x-primary-button>
                            <x-secondary-button class="w-full justify-center mt-4 print:hidden" wire:click='cancel()'>
                                Cancelar
                            </x-secondary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
