@props(['title', 'body', 'bottomButtons', 'openBtn'])

<div>
    <div id="btn-modal">
        {{$openBtn}}
    </div>
    <div id="modal" class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-gray-500 bg-opacity-50 transform scale-0 transition-transform duration-200">
        <div class="h-4/6 w-2/6 rounded-xl bg-white">
            <div class="flex h-[12%] items-center justify-between pl-6 border-b-2 border-gray-100">
                <div>
                    <span class="text-2xl font-medium">{{Str::limit($title, 30)}}</span>
                </div>
            </div>
            <div class="h-[73%] px-6 py-4">
                {{ $body }}
            </div>
            <div class="flex h-[15%] items-center justify-between border-t-2 border-gray-100 px-6 bg-gray-100 rounded-b-xl">
                <div>
                    <button id="close-btn" class="rounded-xl bg-cyan-500 px-4 py-2 text-center font-bold text-white hover:bg-cyan-300  active:bg-white active:text-blue-600 lg:px-3 lg:py-2">
                        <span class="text-center text-xs md:text-sm 2xl:text-xl">Cerrar</span>
                    </button>
                </div>
                <div class="flex gap-3">
                    {{ $bottomButtons }}
                </div>
            </div>
        </div>
    </div>
</div>