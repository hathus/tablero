<form class="md:w-1/2 space-y-5" wire:submit.prevent="" novalidate>
    <div class="mt-4">
        <x-input-label class="uppercase" for="plan_estrategico" :value="__('Plan Estratégico')" />
        <x-text-input id="plan_estrategico" class="block mt-1 w-full" type="text" wire:model="plan_estrategico" wire:model.live="plan_estrategico" :value="old('plan_estrategico')" placeholder="Plan Estratégico" />

    </div>

    <div class="mt-4">
        <x-input-label class="uppercase" for="plan_operativo" :value="__('Plan Operativo')" />
        <x-text-input id="plan_operativo" class="block mt-1 w-full" type="text" wire:model="plan_operativo" wire:model.live="plan_operativo" :value="old('plan_operativo')" placeholder="Plan Operativo" />

    </div>

    <div class="mt-4">
        <x-input-label class="uppercase" for="plan_accion" :value="__('Plan de Acción')" />
        <x-text-input id="plan_accion" class="block mt-1 w-full" type="text" wire:model="plan_accion" wire:model.live="plan_accion" :value="old('plan_accion')" placeholder="Plan de Acción" />

    </div>

    <div class="mt-4">
        <x-input-label class="uppercase" for="tipo_compromiso" :value="__('Tipo de Compromiso')" />
        <x-text-input id="tipo_compromiso" class="block mt-1 w-full" type="text" wire:model="tipo_compromiso" wire:model.live="tipo_compromiso" :value="old('tipo_compromiso')" placeholder="Tipo de Compromiso" />

    </div>

    <div class="mt-4">
        <x-input-label class="uppercase" for="plan_seguimiento" :value="__('Plan de Seguimiento')" />
        <x-text-input id="plan_seguimiento" class="block mt-1 w-full" type="text" wire:model="plan_seguimiento" wire:model.live="plan_seguimiento" :value="old('plan_seguimiento')" placeholder="Plan de Seguimiento" />

    </div>

    <x-primary-button class="w-full justify-center mt-4 hover:bg-green-500 dark:hover:bg-green-600" onclick="window.print()">
        Imprimir
    </x-primary-button>
    <x-secondary-button class="w-full justify-center mt-4" wire:click='cancel()'>
        Cancelar
    </x-secondary-button>
</form>