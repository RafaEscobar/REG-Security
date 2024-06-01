@props(['icon'])
<div class = "group fixed bottom-0 right-0 p-2  flex items-end justify-end w-24 h-24" id="floating-btn-modal">
    <div class = "text-white shadow-xl flex items-center justify-center p-3 rounded-full bg-blue-500 hover:bg-blue-300 active:bg-blue-700 z-50 absolute cursor-pointer">
        {{ $icon }}
    </div>
</div>