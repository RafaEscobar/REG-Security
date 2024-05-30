@props(['title', 'entriesCount', 'tag'])

<div class="relative w-full rounded-xl h-6/6 bg-yellow-400">
    <img src="https://assets-prd.ignimgs.com/2023/07/26/re-death-island-1690379861492.jpg" alt="" class="absolute left-0 top-0 h-full w-full object-cover rounded-xl" />
    <div
        class="absolute bottom-0 left-0 p-2 bg-white-500 bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10 rounded-bl-xl">
        <p class="text-white">{{Str::limit($title, 36)}}...</p>
    </div>
    <div class="absolute top-0 left-0 flex w-full gap-8 pl-8">
        <div class="bg-blue-500 w-3/12 rounded-b-lg text-center">
            <p class="text-white text-xs">{{$entriesCount}} entradas</p>
        </div>
        <div class="bg-red-500 w-3/12 rounded-b-lg text-center">
            <p class="text-white text-xs">{{ucfirst($tag)}}</p>
        </div>
    </div>
</div>
