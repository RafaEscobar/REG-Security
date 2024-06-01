<div class="flex flex-col gap-6">
    <x-basic-input placeholder="Nombre de mi sección" name="name" />
    <x-basic-textarea placeholder="Descripción..." name="description" />
    <x-basic-select placeholder="- Elige la categoria de tu sección -" :values="$tags" name='tag_id' />
    <div class="flex justify-center items-center px-8 gap-6">
        <div class="w-6/12 text-center">
            <img src="{{ asset('storage/images/desk.jpg') }}" alt="" class="rounded-2xl border-2 border-blue-700">
            <span class="text-center text-gray-500 text-sm pt-2">Imagen por defecto.</span>
        </div>
        <div class="w-6/12">
            <label for="dropzone-file"
                class="flex max-w-lg cursor-pointer flex-col items-center rounded-xl border-2 border-dashed border-blue-700 bg-white p-6 text-center">
                <x-fas-cloud-upload-alt class="w-11 h-11 text-blue-700" />
                <h2 class="mt-4 text-xl font-medium text-gray-700">Subir imagen</h2>
                <p class="mt-2 text-gray-500 text-sm">Solo puedes cargar archivos de imagen</p>
                <input id="dropzone-file" type="file" class="hidden" name="image" accept="image/*" />
            </label>
        </div>
    </div>
</div>