@props(['title', 'entriesCount', 'tag'])

<div class="relative w-full rounded-xl">
    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202206/0307/CFAf8koMK6B49DCY5Zk6xFYj.jpg" alt=""
        class="absolute left-0 top-0 h-full w-full object-cover rounded-xl" />
    <div
        class="absolute bottom-0 left-0 p-2 bg-white-500 bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-10">
        <p class="text-white">{{Str::limit($title, 12)...}}</p>
    </div>
    <div class="absolute top-0 left-0 flex w-full gap-8 pl-8">
        <div class="bg-blue-500 w-2/12 rounded-b-lg text-center">
            <p class="text-white text-xs">{{$entriesCount}} entradas</p>
        </div>
        <div class="bg-red-500 w-3/12 rounded-b-lg text-center">
            <p class="text-white text-xs">{{ucfirst($tag)}}</p>
        </div>
    </div>
</div>
