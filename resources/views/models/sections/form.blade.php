<div class="flex flex-col gap-4">
    <x-basic-input placeholder="Nombre de mi sección" />
    <x-basic-textarea placeholder="Descripción..." />
    <x-basic-select placeholder="- Elige la categoria de tu sección -" :values="$tags" />
</div>