@props(['label'])
<button {{ $attributes->merge(['class' => 'rounded-xl bg-blue-800 text-white hover:bg-blue-600 active:bg-blue-400 px-6 py-2 text-center font-bold lg:px-3 lg:py-2']) }}>
    <span class="text-center text-xs md:text-sm 2xl:text-xl">{{$label}}</span>
</button>