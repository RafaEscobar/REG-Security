<div class="flex flex-col gap-6">
    <x-basic-input placeholder="Nombre de mi sección" name="name" isRequired='true' />
    <input type="text" name="" id="" required>
    <x-basic-textarea placeholder="Descripción..." name="description" />
    <x-basic-select placeholder="- Elige la categoria de tu sección -" :values="$tags" name='tag_id' />
    <div class="flex justify-center items-center px-8 gap-6">
        <div class="w-6/12 text-center">
            <img src="{{ asset('storage/images/desk.jpg') }}" alt="" class="rounded-2xl border-2 border-blue-700" id="previewArea">
            <span class="text-center text-gray-500 text-sm pt-2">Imagen por defecto.</span>
        </div>
        <div class="w-6/12">
            <label for="input-section-img"
                class="flex max-w-lg cursor-pointer flex-col items-center rounded-xl border-2 border-dashed border-blue-700 bg-white p-6 text-center">
                <x-fas-cloud-upload-alt class="w-11 h-11 text-blue-700" />
                <h2 class="mt-4 text-xl font-medium text-gray-700">Subir imagen</h2>
                <p class="mt-2 text-gray-500 text-sm">Solo puedes cargar archivos de imagen</p>
                <input id="input-section-img" type="file" class="hidden" accept="image/*" />
            </label>
        </div>
    </div>
    <x-btn label="Guardar" class="bg-blue-700 text-white hover:bg-blue-500 active:bg-blue-300 active:text-white" id="create-section-submit" type="submit"></x-btn>
</div>