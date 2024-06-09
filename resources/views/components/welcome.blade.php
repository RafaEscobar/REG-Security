@props(['sections'])

<div>
    @if(count($sections) > 0)
        <div class="grid grid-rows-4 grid-cols-3 gap-8 h-screen p-4">
            @foreach ($sections as $section)
                <x-section-card :title="$section->name" entriesCount="0" :tag="$section->tag->name" imgUrl="{{$section->getFirstMediaUrl('sections')}}" />
            @endforeach
        </div>
        <div class="p-6">
            {{ $sections->links() }}
        </div>
    @else
        <div class="bg-white pt-4 pb-6 w-full flex flex-col justify-center items-center">
            <div class="w-3/12 h-64">
                <div id="empty-state"></div>
                </div>
                <span class="text-gray-600 text-xl text-center block font-extralight">No tienes secciones para mostrar</span>
        </div>
    @endif
</div>