@props(['url', 'label'])
<a href="{{ url($url) }}" class="bg-cyan-100 px-2 py-1 lg:px-3 lg:py-2 rounded-xl text-black font-semibold hover:bg-cyan-50 active:bg-white hover:text-blue-400 active:text-blue-600 text-center">
    <span class="text-xs md:text-sm 2xl:text-xl text-center">{{$label}}</span>
</a>