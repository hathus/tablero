<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        @keyframes typingEffect {
            0% { transform: scale(1); }
            40% { transform: scale(1.2); }
            70% { transform: scale(0.95); }
            100% { transform: scale(1); }
        }
    </style>

    <div class="py-12" x-data="{
        activeTab: 1,
        tabs: [
            'Seguridad',
            'Bienestar',
            'Educaci\u00f3n',
            'Salud',
            'Desarrollo econ\u00f3mico',
            'Desarrollo urbano',
            'Medio ambiente',
            'Gobierno'
        ]
    }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex min-h-[400px]">

           <!-- Botones laterales -->
<div class="w-1/4 bg-gray-800 text-white p-4 space-y-2">
    <template x-for="(name, index) in tabs" :key="index">
        <button
            @click="activeTab = index + 1"
            class="block w-full text-left px-4 py-3 rounded-xl font-semibold transition-all duration-300 transform"
            :class="{
                1: activeTab === 1 ? 'bg-gradient-to-r from-blue-700 to-blue-500 scale-110 shadow-[0_8px_30px_rgb(0,0,0,0.25)] ring-4 ring-blue-300 text-white z-10' : 'bg-gradient-to-r from-blue-600 to-blue-400 hover:scale-105 text-white',
                2: activeTab === 2 ? 'bg-gradient-to-r from-pink-700 to-pink-500 scale-110 shadow-[0_8px_30px_rgb(0,0,0,0.25)] ring-4 ring-pink-300 text-white z-10' : 'bg-gradient-to-r from-pink-600 to-pink-400 hover:scale-105 text-white',
                3: activeTab === 3 ? 'bg-gradient-to-r from-red-600 to-red-400 scale-110 shadow-[0_8px_30px_rgb(0,0,0,0.25)] ring-4 ring-red-300 text-white z-10' : 'bg-gradient-to-r from-red-500 to-red-300 hover:scale-105 text-white',
                4: activeTab === 4 ? 'bg-gradient-to-r from-sky-700 to-sky-500 scale-110 shadow-[0_8px_30px_rgb(0,0,0,0.25)] ring-4 ring-sky-300 text-white z-10' : 'bg-gradient-to-r from-sky-600 to-sky-400 hover:scale-105 text-white',
                5: activeTab === 5 ? 'bg-gradient-to-r from-orange-700 to-orange-500 scale-110 shadow-[0_8px_30px_rgb(0,0,0,0.25)] ring-4 ring-orange-300 text-white z-10' : 'bg-gradient-to-r from-orange-600 to-orange-400 hover:scale-105 text-white',
                6: activeTab === 6 ? 'bg-gradient-to-r from-gray-500 to-gray-300 scale-110 shadow-[0_8px_30px_rgb(0,0,0,0.25)] ring-4 ring-gray-400 text-black z-10' : 'bg-gradient-to-r from-gray-400 to-gray-200 hover:scale-105 text-black',
                7: activeTab === 7 ? 'bg-gradient-to-r from-green-700 to-green-500 scale-110 shadow-[0_8px_30px_rgb(0,0,0,0.25)] ring-4 ring-green-300 text-white z-10' : 'bg-gradient-to-r from-green-600 to-green-400 hover:scale-105 text-white',
                8: activeTab === 8 ? 'bg-gradient-to-r from-purple-700 to-purple-500 scale-110 shadow-[0_8px_30px_rgb(0,0,0,0.25)] ring-4 ring-purple-300 text-white z-10' : 'bg-gradient-to-r from-purple-600 to-purple-400 hover:scale-105 text-white'
            }[index + 1]"
            x-text="name">
        </button>
    </template>

    <!-- 🔽 Botón adicional: Gráficas -->
    <button
        @click="window.location.href = '/stats'"
        class="block w-full text-left px-4 py-3 mt-4 rounded-xl font-semibold transition-all duration-300 transform bg-gradient-to-r from-yellow-500 to-yellow-300 hover:scale-105 text-black shadow-md ring-2 ring-yellow-400 ring-offset-2">
        📊 Gráficas
    </button>
</div>


            <!-- Contenido dinámico -->
            <div class="w-3/4 p-6 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 overflow-auto">
                <template x-for="(name, index) in tabs" :key="'tab-' + index">
                    <template x-if="activeTab === index + 1">
                        <div x-data="{
                            showButtons: false,
                            selectedButton: null,
                            returnToButtons() {
                                this.showButtons = false;
                                this.selectedButton = null;
                                setTimeout(() => this.showButtons = true, 50);   
                            }
                        }" x-init="setTimeout(() => showButtons = true, 50)">
 
                            <!-- Mostrar contenido del botón si se seleccionó -->
                            <template x-if="selectedButton"> 
                                <div>
                                    <button @click="returnToButtons()"
                                            class="mb-4 px-4 py-2 rounded bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 transition text-sm font-semibold">
                                        ← Volver
                                    </button> 
                                    <div class="p-4 rounded bg-gray-100 dark:bg-gray-800">
                                        <h3 class="text-lg font-bold mb-2">Contenido de <span x-text="selectedButton"></span></h3>
                                        <p>Aquí se muestra el contenido de este botón.</p>
                                    </div>
                                </div>
                            </template>

                            <!-- Mostrar botones si no se ha seleccionado ninguno -->
                            <template x-if="!selectedButton">
                                <div class="grid grid-cols-4 gap-3">
                                    <template x-for="i in 20" :key="i">
                                        <button
                                            x-show="showButtons"
                                            @click="selectedButton = name + ' ' + i"
                                            x-transition:enter="transition transform ease-in-out duration-700"
                                            x-transition:enter-start="opacity-0 translate-y-10 scale-90"
                                            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                                            @mouseenter="$el.style.animation = 'typingEffect 0.4s ease-in-out forwards'"
                                            @mouseleave="$el.style.animation = ''"
                                            class="w-full h-14 flex items-center justify-center px-4 rounded font-semibold transition-all duration-300 transform truncate text-white"
                                            :class="{
                                                0: 'bg-blue-500 hover:bg-blue-600 hover:shadow-lg hover:ring-2 hover:ring-blue-400 hover:ring-offset-2 hover:ring-offset-current',
                                                1: 'bg-pink-500 hover:bg-pink-600 hover:shadow-lg hover:ring-2 hover:ring-pink-400 hover:ring-offset-2 hover:ring-offset-current',
                                                2: 'bg-red-400 hover:bg-red-500 hover:shadow-lg hover:ring-2 hover:ring-red-400 hover:ring-offset-2 hover:ring-offset-current',
                                                3: 'bg-sky-500 hover:bg-sky-600 hover:shadow-lg hover:ring-2 hover:ring-sky-400 hover:ring-offset-2 hover:ring-offset-current',
                                                4: 'bg-orange-500 hover:bg-orange-600 hover:shadow-lg hover:ring-2 hover:ring-orange-400 hover:ring-offset-2 hover:ring-offset-current',
                                                5: 'bg-white hover:bg-gray-100 hover:shadow-lg hover:ring-2 hover:ring-gray-400 hover:ring-offset-2 hover:ring-offset-current text-black dark:text-black',
                                                6: 'bg-green-500 hover:bg-green-600 hover:shadow-lg hover:ring-2 hover:ring-green-400 hover:ring-offset-2 hover:ring-offset-current',
                                                7: 'bg-purple-500 hover:bg-purple-600 hover:shadow-lg hover:ring-2 hover:ring-purple-400 hover:ring-offset-2 hover:ring-offset-current'
                                            }[index] || 'bg-gray-500'"
                                            x-text="name + ' ' + i">
                                        </button>
                                    </template>
                                </div>
                            </template>

                        </div>
                    </template>
                </template>
            </div>
        </div>
    </div>
</x-app-layout>