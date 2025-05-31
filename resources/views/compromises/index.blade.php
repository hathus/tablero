<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Compromisos') }}
        </h2>
        <livewire:compromises.list-compromises/>
    </x-slot>

</x-app-layout>