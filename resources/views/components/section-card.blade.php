@props(['title', 'entriesCount', 'tag', 'imgUrl'])

<div class="relative w-full rounded-xl h-6/6 border-2 border-blue-100">
    <img src="{{ $imgUrl }}" alt="" class="absolute left-0 top-0 h-full w-full object-cover rounded-xl" />
    <div
        class="absolute bottom-0 left-0 p-2 bg-white box-sh rounded-tr-xl">
        <p class="text-black">{{Str::limit($title, 36)}}...</p>
    </div>
    <div class="absolute top-0 left-0 flex w-full gap-4 pl-4">
        <div class="bg-blue-500 w-3/12 rounded-b-lg text-center">
            <p class="text-white text-xs">{{$entriesCount}} entradas</p>
        </div>
        <div class="bg-red-500 w-3/12 rounded-b-lg text-center">
            <p class="text-white text-xs">{{ucfirst($tag)}}</p>
        </div>
    </div>
</div>
