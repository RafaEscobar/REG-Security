<x-modal>
    <x-slot name="title">Crear nueva sección</x-slot>
    <x-slot name="body">
       @include('models.sections.create')
    </x-slot>
    <x-slot name="bottomButtons">
        <x-btn label="Guardar" class="bg-blue-700 text-white hover:bg-blue-500 active:bg-blue-300 active:text-white" id="create-section-submit"></x-btn>
    </x-slot>
    <x-slot name="openBtn">
        <x-floating-btn>
            <x-slot name='icon'>
                <x-fas-plus-circle class="w-6 h-6" />
            </x-slot>
        </x-floating-btn>
    </x-slot>
</x-modal>