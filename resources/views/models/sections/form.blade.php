<div class="flex flex-col gap-6">
    <x-basic-input placeholder="Nombre de mi sección" name="name" />
    <x-basic-textarea placeholder="Descripción..." name="description" />
    <x-basic-select placeholder="- Elige la categoria de tu sección -" :values="$tags" name='tag_id' />
    <label for="dropzone-file"
        class="mx-auto flex w-6/12 max-w-lg cursor-pointer flex-col items-center rounded-xl border-2 border-dashed border-blue-700 bg-white p-6 text-center">
        <x-fas-cloud-upload-alt class="w-12 h-12 text-blue-700" />
        <h2 class="mt-4 text-xl font-medium tracking-wide text-gray-700">Subir imagen</h2>
        <p class="mt-2 tracking-wide text-gray-500">Pudes subir archivos tipo SVG, PNG o JPG</p>
        <input id="dropzone-file" type="file" class="hidden" name="image" accept="image/*" />
    </label>
</div>