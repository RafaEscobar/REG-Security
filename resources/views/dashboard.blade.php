<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Accesos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome :sections="$sections" />
            </div>
        </div>

        <x-modal>
            <x-slot name="title">Crear nueva sección</x-slot>
            <x-slot name="body">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quia nisi porro nihil, accusantium velit nemo vitae rem atque quidem voluptatem quo ullam, odit non eaque quaerat, deleniti ad ipsum!</span>
            </x-slot>
            <x-slot name="bottomButtons">
                <x-btn label="Añadir"></x-btn>
            </x-slot>
            <x-slot name="openBtn">
                <x-floating-btn>
                    <x-slot name='icon'>
                        <x-fas-plus-circle class="w-6 h-6" />
                    </x-slot>
                </x-floating-btn>
            </x-slot>
        </x-modal>
    </div>
</x-app-layout>
