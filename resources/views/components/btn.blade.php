@props(['label'])
<button {{ $attributes->merge(['class' => 'rounded-xl bg-cyan-400 text-white hover:bg-cyan-300 active:bg-white active:text-blue-600 px-6 py-2 text-center font-bold lg:px-3 lg:py-2']) }}>
    <span class="text-center text-xs md:text-sm 2xl:text-xl">{{$label}}</span>
</button>