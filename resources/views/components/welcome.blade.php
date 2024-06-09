@props(['sections'])

<div>
    @if(count($sections) > 0)
        <div class="grid grid-rows-4 grid-cols-3 gap-4 bg-white h-screen p-4">
            @foreach ($sections as $section)
                <x-section-card :title="$section->name" entriesCount="0" :tag="$section->tag->name" imgUrl="{{$section->getFirstMediaUrl('sections')}}" />
            @endforeach
        </div>
        <div class="p-6">
            {{ $sections->links() }}
        </div>
    @else
        <div class="bg-white h-screen p-4 w-full">
            <div id="empty-state"></div>
        </div>
    @endif
</div>