@props(['url', 'label'])
<a href="{{ url($url) }}" class="bg-cyan-100 px-4 py-2 rounded-xl text-black font-semibold hover:bg-cyan-50 active:bg-white hover:text-blue-400 active:text-blue-600">
    <span>{{$label}}</span>
</a>