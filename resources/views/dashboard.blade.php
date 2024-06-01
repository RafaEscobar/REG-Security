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
                {{ html()->form('POST', '/')->id('form-create-section')->open() }}
                    {{ html()->text('username') }}
                {{ html()->form()->close() }}
            </x-slot>
            <x-slot name="bottomButtons">
                <x-btn label="Guardar" class="bg-blue-600 text-white hover:bg-blue-400 active:bg-white active:text-black" id="create-section-submit"></x-btn>
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
