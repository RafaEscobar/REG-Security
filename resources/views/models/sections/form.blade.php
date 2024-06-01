<div class="flex flex-col gap-6">
    <x-basic-input placeholder="Nombre de mi sección" />
    <x-basic-textarea placeholder="Descripción..." />
    <x-basic-select placeholder="- Elige la categoria de tu sección -" :values="$tags" />
    <label for="dropzone-file"
        class="mx-auto flex w-6/12 max-w-lg cursor-pointer flex-col items-center rounded-xl border-2 border-dashed border-blue-400 bg-white p-6 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
        </svg>
        <h2 class="mt-4 text-xl font-medium tracking-wide text-gray-700">Subir imagen</h2>
        <p class="mt-2 tracking-wide text-gray-500">Pudes subir archivos tipo SVG, PNG o JPG</p>
        <input id="dropzone-file" type="file" class="hidden" />
    </label>
</div>