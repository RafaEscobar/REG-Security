@props(['title', 'body', 'openBtn'])
<div>
    <div id="btn-modal">
        {{$openBtn}}
    </div>
    <div id="modal" class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-gray-500 bg-opacity-50 transform scale-0 transition-transform duration-200">
        <div class="h-4/6 w-2/6 rounded-xl bg-white">
            <div class="flex h-[12%] items-center justify-between pl-6 border-b-2 border-gray-100 bg-gray-100 rounded-t-xl relative">
                <div>
                    <span class="text-2xl font-medium">{{Str::limit($title, 30)}}</span>
                </div>
                <span class="absolute top-2 right-2 text-black focus:outline-none hover:text-gray-500 cursor-pointer" id="close-btn">
                    <x-fas-x class="w-4 h-4" />
                </span>
            </div>
            <div class="h-[88%] overflow-auto px-6 py-4">
                {{ $body }}
            </div>
        </div>
    </div>
</div>