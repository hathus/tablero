<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Planeación de Compromisos') }}
        </h2>
    </x-slot>

    <livewire:commitment-planning.list-commitment-planning/>
</x-app-layout>