<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Compromisos') }}
        </h2>
        <div class="flex flex-row">
            <div class="basis-1/4 mt-3">
                <a href="{{ route('crear-compromiso') }}" class="w-full justify-center inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" wire:navigate>Crear Compromiso</a>
            </div>
        </div>
    </x-slot>
    <livewire:compromises.show-compromise />
</x-app-layout>
